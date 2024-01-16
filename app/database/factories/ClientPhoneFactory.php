<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientPhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'phone' => $this->faker->phoneNumber(),
            'comment' => $this->faker->text(10),
            'client_id' =>1
        ];
    }
}
