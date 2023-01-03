<?php

namespace Database\Factories;

use App\Models\UrbanSpaceProject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UrbanSpace>
 */
class UrbanSpaceFactory extends Factory
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
            'location' => $this->faker->streetAddress,
            'description' => $this->faker->sentence(6),
            'participant' => $this->faker->name() . ' ' . $this->faker->name(),
            'author' => $this->faker->name(),
            'partnership' => $this->faker->name(),
            'urban_space_project_id' => $this->faker->numberBetween(1, 3),
            'thumbnail_landscape' => 'images/project_urbanSpace_01_landscape.png',
            'thumbnail_portrait' => 'images/project_urbanSpace_01_portrait.png',
            'photo_list' => ["images/collab.jpg", "images/project.jpg"]
        ];
    }
}
