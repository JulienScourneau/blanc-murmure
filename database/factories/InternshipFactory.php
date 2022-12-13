<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internship>
 */
class InternshipFactory extends Factory
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
            'description' => $this->faker->paragraph(2),
            'age' => 'A partir de * à *',
            'begin_at' => $this->faker->date(),
            'end_at' => $this->faker->date(),
            'thumbnail'=> 'images/project_illustration_banner.png',
            'price'=> $this->faker->numberBetween(40,150),
            'begin_hour'=> $this->faker->time('H:s'),
            'end_hour'=> $this->faker->time('H:s'),
        ];
    }
}
