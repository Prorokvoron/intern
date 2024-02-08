<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    const CARD_STATUS_ACTIVE = 1;
    const CARD_STATUS_INACTIVE = 2;
    const CARD_STATUS_BLOCKED = 3;

    const CARD_STATUS_ALL = [
        self::CARD_STATUS_ACTIVE => "Активна",
        self::CARD_STATUS_INACTIVE=> "Не Активна",
        self::CARD_STATUS_BLOCKED => "Заблокирована"
    ];

    protected $fillable = [
        'client_id',
        'card_number',
        'card_status',
        'expiration_status'
        ];

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
