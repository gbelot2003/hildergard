<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentsTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_can_reach_student_index()
    {
        // Creamos un usuario
        $user = User::factory()->make();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->get('/admin/alumnos')

        // Deberia tener un listado solo de estudiantes
        ->assertSee('Administración de Alumnos');  
    }


}
