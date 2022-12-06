<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoIllustration>
 */
class PhotoIllustrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'illustrations_id' => $this->faker->numberBetween(1, 5),
            'photos_id' => Photo::factory()
        ];
    }
}
