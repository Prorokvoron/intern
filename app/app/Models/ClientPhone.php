<?php

namespace App\Models;

use Database\Factories\ClientPhoneFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\VersionUpdater\Downloader\Factory;

class ClientPhone extends Model
{
    use HasFactory;

    protected $table = "client_phones";
    protected $fillable = ['client_id', 'phone', 'comment'];


    protected static function newFactory(): ClientPhoneFactory|Factory
    {
        return ClientPhoneFactory::new();
    }
}
