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
    public function a_grade_requires_a_title()
    {
        // Sobreescribimos los middlewares
        $this->withoutMiddleware();

        // Creamos un objeto dummy sin nombre
        $attributes = json_decode(Grade::factory(['name' => ''])->make(), true);

        $this->post('/admin/grados', $attributes)
            ->assertSessionHasErrors('name');        
    }

    /** @test */
    public function a_grade_need_a_teacher()
    {
        $this->withoutMiddleware();

        $attributes = json_decode(Grade::factory(['teacher_id' => null])->make(), true);

        $this->post('/admin/grados', $attributes)
        ->assertSessionHasErrors('teacher_id');
    }

    /** @test */
    public function a_user_can_reach_grade_create_page()
    {
         // Creamos un usuario
         $user = User::factory()->make();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->get('/admin/grados/create')
        ->assertSee('Creación de Grados');
    }

    /** @test */
    public function a_user_can_create_grades() 
    {
        
        //$this->withoutExceptionHandling();

        // Creamos un usuario
        $user = User::factory()->make();

        // Creamos un objeto Grade como array
        $attributes = Grade::factory()->raw();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->post('/admin/grados', $attributes);

        $this->assertDatabaseHas('grades', $attributes);

        $this->get('/admin/grados')->assertSee( $attributes['name']);
    }

    /** @test */
    public function a_user_can_view_a_grade()
    {
        $this->withoutMiddleware();

        $grade = Grade::factory()->create();

        $this->get('/admin/grados/' . $grade->id)
            ->assertSee($grade->name);
    }

    /** @test */
    public function auth_user_can_get_edit_page()
    {

        // Creamos un grado
        $grade = Grade::factory()->create();

        // Creamos un usuario
        $user = User::factory()->make();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->get('/admin/grados/' . $grade->id . "/edit" )
        ->assertSee('Edición de Grados');
    }
}
