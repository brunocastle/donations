<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RequestCategoryFactory extends Factory
{

    public function definition()
    {
        return [
            'token' => fake()->slug,
            'days_until_expire' => fake()->numberBetween(30,180),
        ];
    }
}
