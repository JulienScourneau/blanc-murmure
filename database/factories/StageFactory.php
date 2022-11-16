<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stage>
 */
class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(4),
            'description' => $this->faker->sentence(12),
            'age' => 'A partir de * à *',
            'begin_at' => $this->faker->date(),
            'end_at' => $this->faker->date(),
            'thumbnail'=> 'Image/path',
            'price'=> $this->faker->numberBetween(40,150),
        ];
    }
}
