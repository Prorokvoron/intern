<?php

namespace App\Http\Classes;

use phpDocumentor\Reflection\Types\Integer;

class Track extends Car
{
    private int $weight;

    private bool $trailer;
    public function getWeight():int
    {
        return $this->weight;
    }
    public  function getTrailer():bool
    {
        return $this->trailer;
    }
    public function setWeight(Int $w):self
    {
        $this->weight=$w;
        return $this;
    }
    public function setTrailer(bool $s):self
    {
        $this->trailer=$s;
        return $this;
    }
    public function test()
    {
        $a = [];
        for ($i = 1; $i<10;$i++){
            $a[$i]=$i;
        }

        $i = [10, 11, 12];

     //   return (string) in_array(12,$a,true);
        $b= ['a', 'b', 'c', 'd', 'f', 'h', 'y','e','w'];
     //return array_combine($b, $a);
       $c = array_combine($b, $a);
       $c['a'] = 100;
       $d = array_combine($b, $a);

       $k = [$c,  $d];

       // return array_column( $k, 'a');

       // return key_exists('h',  $c );
       // return $c ;
      //  return array_keys($c);

        //return array_merge($a, $i);
        $stack = array("orange", "banana");

         //  array_push($stack, "apple", "raspberry");
        //   return $stack;

        //return arsort($a);
        $fruits = array("d" => "лимон", "a" => "апельсин", "b" => "банан", "c" => "яблоко");
        arsort($fruits);
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";

        }
    }
}

