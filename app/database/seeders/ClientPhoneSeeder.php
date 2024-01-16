<?php

namespace Database\Seeders;

use App\Models\ClientPhone;
use Illuminate\Database\Seeder;

class ClientPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientPhone::factory()->count(10)->create();
    }
}
