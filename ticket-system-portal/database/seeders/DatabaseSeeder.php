<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory()->create([
            'firstname' => 'Jan',
            'lastname' => 'Janssen',
            'email' => 'janjanssen@hotmail,com',
            'address' => 'Willemplein 301',
            'telephone' => '010-3246911',
            'klas' => 'CMI2'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
