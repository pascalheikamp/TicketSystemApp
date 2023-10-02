<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Laravel\Prompts\password;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'student_number' => fake()->unique()->numerify(5),
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'date_of_birth' => fake()->date(),
            'klas' => fake()->name(),
            'address' => fake()->address(),
            'role'=> 'student',
            'login_limit' => 10,
            'login_time' => fake()->dateTime(),
            'password' => fake()->unique()->password(5, 20), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
