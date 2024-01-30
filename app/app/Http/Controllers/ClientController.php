<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\ClientIndexResourceCollection;
use App\Http\Resources\ClientResourceShow;
use App\Models\Client;

use App\Repositories\ClientRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function store(ClientRequest $clientRequest)
    {
        $input = $clientRequest->validated();
        $client = new Client($input); // новая запись в модели
        $client->save();
        return $client;
    }

    public function show(Client $client): ClientResourceShow
    {
           return new ClientResourceShow($client);
    }

    public function index()
    {
//        dump(DB::table('clients')->get());
//        dump((new ClientRepository())->setTable('clients')->index());
//        return DB::table('clients')->get();
//        return new ClientIndexResourceCollection(
//            (new ClientRepository())->setTable('clients')->index()
//        );


    }
    public function update(UpdateClientRequest $request, Client $client): Client
    {
        $input = $request->validated();
        $client =  Client::findOrFail($client->id);
        $client->update($input);
        return $client->refresh();
    }

    public function delete(Client $client)
    {
        //$this->delete('last_name');
       return Client::findOrFail($client->id)->delete();
    }
}
