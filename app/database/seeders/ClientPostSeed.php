<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Post;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientPostSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<10; $i++) {
            DB::table('client_post')->insert([
                'client_id' => Client::inRandomOrder()->first()->id,
                'post_id' => Post::inRandomOrder()->first()->id,
                'updated_at' => app(Generator::class)->dateTime('2023-01-01 00:00:00'),
                'created_at' => app(Generator::class)->dateTime('2023-01-01 00:00:00'),
            ]);
        }
       //
    }
}
