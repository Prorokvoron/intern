<?php

namespace Database\Seeders;

use App\Models\Tree;
use Illuminate\Database\Seeder;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Tree::factory()->count(3)->create();
    }
}
