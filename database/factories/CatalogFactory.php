<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog>
 */
class CatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(10),
            'link' => $this->faker->url,
            'page_number' => $this->faker->numberBetween(40, 60),
            'size' => '00 x 00',
            'thumbnail' => 'images/project_illustration_banner.png',
        ];
    }
}
