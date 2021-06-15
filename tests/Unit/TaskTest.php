<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Classes;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function has_classes()
    {
        $class = Classes::factory()->create();

        $task = Task::factory()->create(['classes_id' => $class->id]);

        $this->assertInstanceOf(Classes::class, $task->clases);

    }
}
