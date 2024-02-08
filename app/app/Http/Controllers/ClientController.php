<?php

namespace App\Http\Controllers;




use App\Http\Requests\ClientRequest;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\ClientIndexResourceCollection;
use App\Http\Resources\ClientResourceShow;
use App\Models\Client;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function show(Client $client)
    {
        return new ClientResourceShow($client);
    }

    public function index()
    {
        $clients = Client::all();
        return new ClientIndexResourceCollection($clients);
    }

    public function delete(Client $client)
    {
        return DB::table('clients')->where('id', '=', $client->id)->delete();
    }

    public function update(Client $client, UpdateClientRequest $updateClientRequest )
    {
        $input = $updateClientRequest->validated();
        return DB::table('clients')->where('id', '=', $client->id)->update($input);
    }

    public function store(ClientRequest $clientRequest)
    {
        $input = $clientRequest->validated();
        $client = new Client($input);
        $client->save();
        return $client;
    }


}
