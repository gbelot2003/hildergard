<?php

namespace Tests\Unit;

use App\Models\Grade;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GradeTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
   public function it_has_a_path()
   {
       $grade = Grade::factory()->create();

       $this->assertEquals('/admin/grados/' . $grade->id, $grade->path());
   }
}
