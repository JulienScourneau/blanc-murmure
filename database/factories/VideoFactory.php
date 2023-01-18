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
            'slug' => $this->faker->slug,
            'description' => '<p>' . $this->faker->sentence(10) . '</p>',
            'link' => $this->faker->url,
            'thumbnail' => 'images/project_illustration_banner.png',
            'author' => $this->faker->name,
            'partnership' => $this->faker->sentence(2),
            'duration' => $this->faker->time('i:s'),
            'year' => $this->faker->year(),
        ];
    }
}
