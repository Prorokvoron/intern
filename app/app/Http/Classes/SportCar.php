<?php
namespace App\Http\Classes;


 use Illuminate\Support\Collection;
 use Illuminate\Support\Facades\DB;

 class SportCar {
     private int $speed;
     public function __construct(int $s)
     {
         $this->speed= $s;
     }

     public function getSpeedAttribute():int
     {
         return $this->speed;
     }
     public  function setSpeedAttribute(int $s): void
     {
         $this->speed= $s;
     }

     public function getUsers()
     {
         return DB::table('users')->get()->toArray();
        // return array_column(DB::table('users')->get()->toArray(), 'id');
     }

 }
