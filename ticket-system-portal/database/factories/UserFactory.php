<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Laravel\Prompts\password;
use function Webmozart\Assert\Tests\StaticAnalysis\integer;

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
            'name' => 'pascal',
            'email' => 'pascal@example.com',
            'email_verified_at' => now(),
            'student_number' => fake()->unique()->numerify(),
            'firstname' =>  'Pascal',
            'lastname' => 'Heikamp',
            'date_of_birth' => fake()->dateTime,
            'klas' => '',
            'address' => fake()->address(),
            'role'=> 'admin',
            'login_limit' => 0,
            'login_time' => fake()->dateTime(),
            'password' => 'Welkom@1234', // password
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
