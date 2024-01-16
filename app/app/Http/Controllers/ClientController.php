<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\ClientIndexResourceCollection;
use App\Http\Resources\ClientResourceShow;
use App\Models\Client;

use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;

class ClientController extends Controller
{
    public function store(ClientRequest $clientRequest)
    {
        $input = $clientRequest->validated();
        $client = new Client($input);
        $client->save();
        return $client;
    }

    public function show(Client $client): ClientResourceShow
    {
           return new ClientResourceShow($client);
    }

    public function index(): ClientIndexResourceCollection
    {
        return ClientIndexResourceCollection::make(Client::all());
    }
    public function update(UpdateClientRequest $request, Client $client): Client
    {
        $input = $request->validated();
        $client =  Client::findOrFail($client->id);
        $client->update($input);
        return $client->fresh();
    }

    public function delete(Client $client)
    {
        //$this->delete('last_name');
       return Client::findOrFail($client->id)->delete();
    }
}
