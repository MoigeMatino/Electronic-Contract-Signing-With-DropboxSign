<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $start_time = microtime(true);
        $this->call([
            UserSeeder::class,
        ]);

        $end_time = microtime(true);
        $total_time = $end_time - $start_time;

        if ($total_time < 60) dump('Execution time of seeders = ' . $total_time . ' sec');

        dump('Execution time of seeders = ' . ($total_time / 60) . ' min');
    }
}
