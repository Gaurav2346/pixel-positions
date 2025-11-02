<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['₹35,000/month', '₹50,000/month', '₹80,000/month']),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full time', 'Part time', 'Remote']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(20),
        ];
    }
}
