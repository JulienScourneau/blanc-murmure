<?php

namespace Database\Factories;

use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'subtitle' => $this->faker->sentence(4),
            'begin_at' => $this->faker->date(),
            'end_at' => $this->faker->date(),
            'thumbnail' => 'images/project_illustration_banner.png',
        ];
    }
}
