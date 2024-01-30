<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateClientEmailRequest;
use App\Models\ClientEmail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientEmailController extends Controller
{

    public string $table;

    public function index()
    {
        return DB::table('client_emails')->get();
    }
    public function show(ClientEmail $clientEmails)
    {
        return DB::table('client_emails')->
            where('id','=',$clientEmails->id)->first();
    }

    public function destroy(ClientEmail  $clientEmail)
    {
        return DB::table('client_emails')->
        where('id','=', $clientEmail->id)->delete();
    }
   // public function update(ClientEmail $clientEmail, UpdateClientEmailRequest $request)
    //{
     //   return DB::table('client_emails')->
       // where('id','=',$request->id)->update(array());
   // }
   public function update(UpdateClientEmailRequest $request, ClientEmail $clientEmail):ClientEmail
   {
      $input = $request->validated();
      $clientEmail= ClientEmail::findOrFail($clientEmail->id);
      $clientEmail->update($input);
      return $clientEmail->fresh();
    }

    public function sum($a, $b):int
    {
         return $a + $b;
   }
    private function mul($a , $b):int
    {
        return $a * $b;
    }

    protected function dif($a, $b):int|null
    {
        if($b != 0) {
            return $a / $b;
        }
         return null;
    }

    protected function Sum1($a, $b):int
    {
        $this->setTable('clients')->sum($a, $b);
        return $this->sum($a, $b) + $this->mul($a, $b) * $this->dif($a, $b);
    }

    protected function setTable(string $Set):self
    {
        $this->table=$Set;
        return $this;
    }

    public function getTable():string
    {
        return $this->table;
    }

    public function filter(FormRequest $request)
    {
        $input = $request->validated();
        if($input['sort']) {
         return;
        }
    }



}
