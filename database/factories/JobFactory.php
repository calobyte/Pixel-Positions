<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => "$" . rand(10, 200) . ",000 USD",
            'location' => fake()->randomElement(["Remote", "In Office", "Hybrid"]),
            'schedule' => fake()->randomElement(["Part Time", "Full Time", "Contact"]),
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
