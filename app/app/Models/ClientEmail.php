<?php

namespace App\Models;

use Database\Factories\ClientEmailFactory;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientEmail extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'comment'];
    protected static function newFactory(): ClientEmailFactory|Factory
    {
        return ClientEmailFactory::new();
    }
}
