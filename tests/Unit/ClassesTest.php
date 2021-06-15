<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ClassesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function has_a_teacher()
    {
        $user = User::factory()->create();
        $classes = Classes::factory()->create(['teacher_id' => $user->id]);

        $this->assertEquals($classes->teacher->id, $user->id);
    }

    /** @test */
    public function has_a_grade()
    {
        $grado = Grade::factory()->create();
        $classes = Classes::factory()->create(['grade_id' => $grado->id]);

        $this->assertEquals($classes->grade->id, $grado->id);
    }
}
