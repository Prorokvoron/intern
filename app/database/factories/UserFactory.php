<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' =>$this->faker->firstName,
            'middle_name' =>$this->faker->text,
            'full_name'=>$this->faker->text,
            'auth_identifier'=>1,
            'date_of_birth'=>$this->faker->dateTime,
            'sex'=>$this->faker->boolean,
            'phone'=>$this->faker->numerify('7###########'),
            'email'=>$this->faker->email,
            'comment'=>$this->faker->text,

        ];
    }


}
