<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GradeTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_grades() 
    {
        // Creamos un usuario
        $user = User::factory()->make();

        // Creamos un objeto Grade como array
        $attributes = json_decode(Grade::factory()->make(), true);

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->post('/admin/grados', $attributes);

        $this->assertDatabaseHas('grades', $attributes);
    }

    /** @test */
    public function a_grade_requires_a_title()
    {
        // Sobreescribimos los middlewares
        $this->withoutMiddleware();

        // Creamos un objeto dummy sin nombre
        $attributes = json_decode(Grade::factory(['name' => ''])->make(), true);

        $this->post('/admin/grados', $attributes)
            ->assertSessionHasErrors('name');
        
        
    }
}
