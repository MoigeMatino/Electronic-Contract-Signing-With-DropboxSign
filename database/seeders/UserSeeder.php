<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'Lewis Munyi' => 'lewis@email.com',
            'Agatha Bahati' => 'agathamunyi@email.com',
        ];

        foreach ($users as $key => $value) {
            $user = User::create([
                'name' => $key,
                'email' => $value,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            $user->envelopes()->create([]);
        }

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => fake()->name,
                'email' => fake()->email,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
