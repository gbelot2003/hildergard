<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Lection;
use Illuminate\Database\Eloquent\Factories\Factory;

class LectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lection::class;

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
        ];
    }
}
