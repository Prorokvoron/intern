<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(191),
            'middle_name' =>$this->faker->lastName(191),
            'family_name' =>$this->faker->text(191),
            'birthData' =>$this->faker->date(),
            'phone' =>$this->faker->numerify("7924#######"),
            'mail' =>$this->faker->email
        ];
    }
}
