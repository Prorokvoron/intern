<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientPhoneRequest;
use App\Http\Requests\UpdateClientPhoneRequest;
use App\Models\ClientPhone;

use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;

class ClientPhoneController extends Controller
{
    public function store(ClientPhoneRequest $clientPhoneRequest)
    {
        $input = $clientPhoneRequest->validated();
        $clientPhone = new ClientPhone($input);
        $clientPhone->save();
        return $clientPhone;
    }

    public function show(ClientPhone $clientPhone): ClientPhone
    {
        return $clientPhone;
    }

    public function index(): Collection
    {
        return ClientPhone::all();
    }
    public function update(UpdateClientPhoneRequest $request, ClientPhone $clientPhone): ClientPhone
    {
        $input = $request->validated();
        $clientPhone =  ClientPhone::findOrFail($clientPhone->id);
        $clientPhone->update($input);
        return $clientPhone->fresh();
    }

    public function delete(ClientPhone $clientPhone)
    {
       return ClientPhone::findOrFail($clientPhone->id)->delete();
    }
}
