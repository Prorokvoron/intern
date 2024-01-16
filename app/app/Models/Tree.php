<?php

namespace App\Models;

use Database\Factories\TreeFactory;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;
    protected $fillable=[
        'region',
        'type',
        'action_at',
        'text'
    ];
    protected static function newFactory():TreeFactory|Factory
    {
        return TreeFactory::new();
    }


}
