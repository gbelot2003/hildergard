<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GradeTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_grades()
    {
        $user = User::factory()->make();

        $attributes = [
            'name' => $this->faker->sentence,
        ];

        $this->actingAs($user);

        $this->post('/admin/grados', $attributes);

        $this->assertDatabaseHas('grades', $attributes);
    }

    
    public function a_grade_requires_a_title()
    {
        $this->withoutMiddleware();

        $this->post('/admin/grados', [])
            ->assertSessionHasErrors('name');
        
        
    }
}
