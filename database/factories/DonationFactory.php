<?php

namespace Database\Factories;

use App\Http\Enums\DonationStatus;
use App\Models\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DonationFactory extends Factory
{

    public function definition(): array
    {
        return [
            'request_id' => Request::factory(),
            'user_id' => User::factory(),
            'status' => randomElement(DonationStatus::cases()),
        ];
    }
}
