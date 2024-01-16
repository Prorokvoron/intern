<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\VersionUpdater\Downloader\Factory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'full_name',
        'date_of_birth',
        'sex',
        'preferred_name',
        'telegram',
        'phone',
        'phone_comment',
        'email',
        'email_comment',
        'address',
        'country_code',
        'city',
        'comment'
    ];

    protected static function newFactory(): ClientFactory|Factory
    {
        return ClientFactory::new();
    }

}
