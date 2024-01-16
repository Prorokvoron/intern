<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ClientControllerTest extends TestCase
{

    public function testClientIndexMethod(): void
    {
        $response = $this->getJson(route('clients.index'));
        $response->assertJson(function(AssertableJson $json) {
            $json->count(3)->etc();
        });
        $response->assertStatus(200);
    }

    public function testClientShowMethod(): void
    {
        $client = Client::factory()->create();
        $response = $this->getJson(route('clients.show', ['client' => $client->id]));
        $response->assertJson(function(AssertableJson $json) {
            $json->hasAll(['id', 'last_name'])->etc();
        });
        $response->assertStatus(200);
    }

    public function testClientDeleteMethod(): void
    {
        $client = Client::factory()->create();
        $this->assertDatabaseHas(Client::class, ['id' => $client->id]);
        $response = $this->delete(route('clients.delete', ['client' => $client->id]));
        $this->assertDatabaseMissing(Client::class,['id' => $client->id] );
        $response->assertStatus(200);
    }


}
