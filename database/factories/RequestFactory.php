<?php

namespace Database\Factories;

use App\Http\Enums\RequestStatus;
use App\Models\Organization;
use App\Models\RequestCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RequestFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->sentence('6'),
            'description' => fake()->paragraph,
            'status' => randomElement(RequestStatus::cases()),
            'request_category_id' => RequestCategory::all()->random(),
            'user_id' => User::factory(),
            'organization_id' => 1,
        ];
    }
}
