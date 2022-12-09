<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence('2'),
            'description' => $this->faker->sentence('12'),
            'link' => 'images/project_illustration_banner.png',
            'thumbnail' => $this->faker->imageUrl,
        ];
    }
}
