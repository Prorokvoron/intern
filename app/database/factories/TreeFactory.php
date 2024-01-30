<?php

namespace Database\Factories;


use App\Models\Client;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trees>
 */
class TreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'region'=>json_encode($this->faker->text()),
            'type'=>$this->faker->text(),
            'action_at'=>$this->faker->dateTime(),
            'text'=>$this->faker->text(),
            'post_id'=>Post::inRandomOrder()->first()->id
        ];
    }
}
