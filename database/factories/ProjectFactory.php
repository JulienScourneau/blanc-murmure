<?php

namespace Database\Factories;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'partenaireship' => $this->faker->sentence(6),
            'description' => $this->faker->sentence(6),
            'date' => $this->faker->sentence(6),
            'project_category_id' => ProjectCategory::factory(),
        ];
    }
}
