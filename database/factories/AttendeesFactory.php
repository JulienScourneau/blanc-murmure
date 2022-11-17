<?php

namespace Database\Factories;

use App\Models\Stage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendees>
 */
class AttendeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'date_birth' => $this->faker->date(),
            'parent_name' => $this->faker->firstName . $this->faker->lastName,
            'relationship' => 'Father/Mother',
            'address' => $this->faker->streetAddress,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'phone_number' => $this->faker->phoneNumber,
            'right_to_image' => "Oui/Non",
            'stage_id' =>Stage::factory(),
        ];
    }
}
