<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    use WithFaker, RefreshDatabase;
    
    private $alumno;
    private $editor;
    private $admin;

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
    public function a_guess_user_cant_see_the_users()
    {
        //$this->withoutExceptionHandling();
        // Ninguna cuenta guess puede alcanzar el controlador 
        // por el middleware auth
        $request = $this->get('/admin/usuarios')
            ->assertStatus(302);
    }

    /** @test */
    public function a_non_editor_user_cant_see_users()
    {
        $this->actingAs($this->alumno);
        $this->get('/admin/usuarios')
            ->assertStatus(403);
    }

    /** @test */
    public function a_editor_and_admin_user_can_see_users()
    {
        $this->actingAs($this->editor);
        $this->get('/admin/usuarios')
            ->assertStatus(200);

        $this->actingAs($this->admin);
        $this->get('/admin/usuarios')
            ->assertStatus(200);
    }

    /** @test */
    public function admin_can_reach_user_create()
    {
        $this->actingAs($this->admin);

        $this->get('/admin/usuarios/create')
            ->assertStatus(200);
    }

    /** @test */
    public function admin_can_create_user()
    {
        $this->actingAs($this->admin);

        $data = [
            'name' => 'cualquiera',
            'email' => 'cualquiera@cualquiera.com'
        ];

        $this->post('/admin/usuarios', $data)
            ->assertRedirect('/admin/usuarios');

        $this->assertDatabaseHas('users', ['name' => 'cualquiera']);
    }

}