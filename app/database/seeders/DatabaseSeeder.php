<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ClientEmail;
use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ClientSeeder::class,
            ClientPhoneSeeder::class,
            ClientEmailSeeder::class,
            PostSeeder::class,
            TreeSeeder::class,
            ClientPostSeed::class,
            UserSeeder::class,
            CardSeeder::class,
            TaskSeeder::class,
            TaskOnlookersSeeder::class
                     ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
