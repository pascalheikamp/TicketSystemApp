<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'remove_date' => fake()->dateTime(),
            'created_date' => fake()->dateTime()
        ];
    }
}
