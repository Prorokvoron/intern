<?php

namespace App\Http\Classes;

class Car
{
    private string $wheels;

    private string $color;

    public function getWheels():string
    {
        return $this->wheels;
    }
    public function getColor():string
    {
        return $this->color;
    }
    public function setWheels(string $w):self
    {
        $this->wheels=$w;
        return $this;
    }
    public function setColor(string $w): self
    {
        $this->color=$w;
        return $this;
    }
}




