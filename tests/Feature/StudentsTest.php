<?php

namespace Tests\Feature;

use App\Models\Grade;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentsTest extends TestCase
{

    use RefreshDatabase, WithFaker;


    protected function setUp(): void
    {
        parent::setUp();
        \Artisan::call('migrate', ['-vvv' => true]);

        // The configuratios are load from seed
        \Artisan::call('db:seed', ['-vvv' => true]);

        // Creamos un alumno
        $this->alumno = User::factory()->create();
        $this->alumno->assignRole('alumno'); // Asignamos rol

        // Creamos un editor
        $this->editor = User::factory()->create();
        $this->editor->assignRole('editor'); // Asignamos rol

        // Creamos un admin
        $this->admin = User::factory()->create();
        $this->admin->assignRole('administrador'); // Asignamos rol
    }


    /** @test */
    public function a_user_can_create_a_new_student()
    {

        $this->withoutExceptionHandling();

        // Creando un grado
        $grado = Grade::factory()->create();

        // Teniendo un editor/administrador
        $this->actingAs($this->editor);

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'grade_id' => $grado->id,
        ];

        $this->post('/admin/alumnos', $data);

        $this->assertDatabaseHas('users', ['name' => $data['name']]);
    }

    /** @test */
    public function a_editor_can_update_studenr()
    {
        // errores explicitos
        $this->withoutExceptionHandling();

        // Creamos un usuario que editar
        $user = User::factory()->create();

        // Creando un grado
        $grado = Grade::factory()->create();

        // Teniendo un editor/administrador
        $this->actingAs($this->editor);

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'grade_id' => $grado->id,
        ];

        $this->put('/admin/alumnos/' . $user->id, $data);

        $this->assertDatabaseHas('users', ['name' => $data['name']]);


    }

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

    /** @test **/
    public  function a_user_can_reach_student_create()
    {

        // Creamos un usuario
        $user = User::factory()->make();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->get("/admin/alumnos/create")

            // Deberia tener un listado solo de estudiantes
            ->assertSee('Crear Nuevo Alumno');
    }


    /** @test */
    public function a_user_can_reach_student_edit()
    {

        $student = User::factory()->create();

        // Creamos un usuario
        $user = User::factory()->make();

        // Instanciamos al usuario a sesion
        $this->actingAs($user);

        $this->get("/admin/alumnos/" . $student->id . "/edit")

            // Deberia tener un listado solo de estudiantes
            ->assertSee('Edición de Alumno');
    }


}
