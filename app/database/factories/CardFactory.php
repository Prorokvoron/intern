<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'client_id'=>Client::inRandomOrder()->first()->id,
            'number'=>$this->faker->creditCardNumber,
            'status_id'=>array_rand(Card::CARD_STATUS_ALL),
            'expiration_date'=>now()
        ];
    }
}
