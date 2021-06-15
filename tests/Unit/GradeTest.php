<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GradeTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
        $grade = Grade::factory()->make();
        
        $this->assertEquals('/admin/grados/' . $grade->id, $grade->path());
    }

   /** @test */
    public function has_maestro_guia()
    {
        $grado = Grade::factory()->create();
        
        $this->assertEquals(1, $grado->teacher->count());
    }

    /** @test */
    public function has_many_students()
    {
        //creamos un Grado
        $grado = Grade::factory()->create();

        // Creamos un usuario
        $user1 = User::factory()->create();

        // Sincronizamos los modelos
        $grado->studerns()->sync($user1);

        $this->assertDatabaseHas('grade_user', [
            'user_id' => $user1->id,
            'grade_id' => $grado->id
        ]);
    }
}