<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Database\Factories\TreeFactory;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'middle_name',
        'family_name',
        'birthData',
        'Phone',
        'Mail'
    ];
    protected static function newFactory():PostFactory|Factory
    {
        return PostFactory::new();
    }


}
