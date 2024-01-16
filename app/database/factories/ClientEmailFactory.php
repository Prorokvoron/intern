<?php

namespace Database\Factories;

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
        ];
    }
}
