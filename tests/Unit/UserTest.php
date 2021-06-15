<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /** @test */
    public function has_teacher()
    {
        $user = User::factory()->create();
        $grade = Grade::factory(['teacher_id' => $user->id])->create();

        $this->assertInstanceOf(Grade::class, $user->isTeacher);
    }

    /** @test */
    public function has_grades()
    {
        // Creamos usuario
        $user = User::factory()->create();
        // Creamos grado
        $grade = Grade::factory(['teacher_id' => $user->id])->create();

        // Sincronizamos los modelos
        $user->grades()->sync($grade);

        $this->assertDatabaseHas('grade_user', [
            'user_id' => $user->id,
            'grade_id' => $grade->id
        ]);
    }
}
