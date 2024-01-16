<?php

namespace Database\Seeders;

use App\Models\ClientEmail;
use Illuminate\Database\Seeder;

class ClientEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientEmail::factory()->count(10)->create();
    }
}
