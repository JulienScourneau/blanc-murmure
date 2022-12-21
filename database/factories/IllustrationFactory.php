<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Illustration>
 */
class IllustrationFactory extends Factory
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
            'subtitle' => $this->faker->sentence(6),
            'partnership' => $this->faker->sentence(6),
            'description' => $this->faker->sentence(6),
            'thumbnail' => 'images/project_illustration_banner.png',
            'date' => $this->faker->sentence(6),
            'photo_list' => ["images/collab.jpg", "images/project.jpg"]
        ];
    }
}
