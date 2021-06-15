<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Grade;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => User::factory()->create()->id,
            'grade_id' => Grade::factory()->create()->id,
            'name' => $this->faker->sentence,
            'start' => $this->faker->dateTime,
            'end' => $this->faker->dateTime
        ];
    }
}
