<?php

namespace Tests\Feature;

use App\Models\ClientEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientEmailControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDeleteMethod(): void
    {
        $clientEmail = ClientEmail::factory()->create();
        $response = $this->deleteJson(route(
        'client-email.destroy', ['clientEmail' => $clientEmail->id]
    ));
        $this->assertDatabaseMissing(ClientEmail::class, ['id' =>$clientEmail->id]);
        $response->assertStatus(200);
    }
    //https://yandex.ru/search/?clid=2285101&text=%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB+http&lr=197
//https://yandex.ru/search/?text=%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0+url+%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0&lr=197&clid=2285101&src=suggest_W
   //протокол  домен сайта   путь   дополнительные паратметры кзапросу   (&)  # Якорь надругую часть того же самого ресурса
}
