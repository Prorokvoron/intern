<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName(10),
            'first_name' => $this->faker->firstName(10),
            'middle_name' => $this->faker->text(10),
            'full_name' => $this->faker->text(),
            'date_of_birth' => $this->faker->date,
            'sex' => $this->faker->boolean(),
            'preferred_name' => $this->faker->text(),
            'telegram' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber,
            'phone_comment' => $this->faker->text(),
            'email' => $this->faker->email(),
            'email_comment' => $this->faker->text,
            'address' => $this->faker->text(),
            'country_code' => $this->faker->countryCode(),
            'city' => $this->faker->text(),
            'comment' => $this->faker->text(),
        ];
    }
}
