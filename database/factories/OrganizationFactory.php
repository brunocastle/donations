<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => fake()->company,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
        ];
    }
}
