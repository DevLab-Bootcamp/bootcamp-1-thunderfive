<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\UserFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id'=> User::factory(),
            'gender'=> fake()->randomElement(['MALE', 'FEMALE']),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'religion' => 'ISLAM'
        ];
    }
}
