<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Classes;
use App\Models\Lection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LectionTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function belong_to_a_class()
    {
        // Creamos una clase
        $class = Classes::factory()->create();

        //Creamos una leccion y agregamos la clase antes creada
        $lection = Lection::factory()->create(['classes_id' => $class->id]);

        $this->assertEquals(1, $class->lections()->count());
        
        $this->assertInstanceOf(Classes::class, $lection->clases);
    }
}
