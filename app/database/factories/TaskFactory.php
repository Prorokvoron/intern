<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Client;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [

            'card_id'=>Card::inRandomOrder()->first(),
            'client_id'=>Client::inRandomOrder()->first(),
            'title'=> $this->faker->text(),
            'description'=> $this->faker->text(),

        ];
    }
}
