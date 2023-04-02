<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UrbanSpaceProject>
 */
class UrbanSpaceProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => '<p>' . $this->faker->sentence(5) . '</p>',
            'thumbnail' => 'images/project_illustration_banner.png',
            'slug' => $this->faker->slug,
        ];
    }
}
