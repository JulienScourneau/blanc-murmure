<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoUrbanspace>
 */
class PhotoUrbanspaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'urban_space_id' => $this->faker->numberBetween(1,10),
            'photos_id' => Photo::factory()
        ];
    }
}
