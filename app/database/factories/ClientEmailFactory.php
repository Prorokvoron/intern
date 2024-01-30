<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
class ClientEmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email'=>$this->faker->email(),
            'comment'=>$this->faker->text,
            'client_id' => Client::inRandomOrder()->first()->id
        ];
    }
}
