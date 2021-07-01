<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classes_id' => Classes::factory()->create()->id,
            'name' => $this->faker->sentence,
            'start' => $this->faker->dateTime,
            'end' => $this->faker->dateTime,
            'description' => $this->faker->paragraph
        ];
    }
}