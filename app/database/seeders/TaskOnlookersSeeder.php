<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskOnlookersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<10; $i++) {
            DB::table('task_onlookers')->insert([
                'user_id' => User::inRandomOrder()->first()->id,
                'task_id' => Task::inRandomOrder()->first()->id,
                'updated_at' => app(Generator::class)->dateTime('2023-01-01 00:00:00'),
                'created_at' => app(Generator::class)->dateTime('2023-01-01 00:00:00'),
            ]);
        }
    }
}
