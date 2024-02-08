<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateClientEmailRequest;
use App\Models\ClientEmail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;

class ClientEmailController extends Controller
{

    public string $table;

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return clientEmail::all();
    }
    public function show(ClientEmail $clientEmail):ClientEmail
    {
        return $clientEmail;
    }

    public function destroy(ClientEmail  $clientEmail)
    {
        return DB::table('client_emails')->
        where('id','=', $clientEmail->id)->delete();
    }

   public function update(UpdateClientEmailRequest $request, ClientEmail $clientEmail):ClientEmail
   {
      $input = $request->validated();
      $clientEmail= ClientEmail::findOrFail($clientEmail->id);
      $clientEmail->update($input);
      return $clientEmail->fresh();
    }

}
