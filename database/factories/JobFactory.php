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
            'title' => \fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => \fake()->numberBetween(3000, 100000),
        ];
    }


    public function casual(): static
    {
        return $this->state(fn(array $attributes) => [
            'salary' => 800,
        ]);
    } // Job::factory()->casual()->create()
}
