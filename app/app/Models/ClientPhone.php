<?php

namespace App\Models;

use Database\Factories\ClientPhoneFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Psy\VersionUpdater\Downloader\Factory;

/**
 * App\Models\ClientPhone
 *
 * @property int $id
 * @property int $client_id
 * @property string|null $phone
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClientPhoneFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientPhone whereUpdatedAt($value)
 * @property-read \App\Models\Client|null $client
 * @mixin \Eloquent
 */
class ClientPhone extends Model
{
    use HasFactory;

    protected $table = "client_phones";
    protected $fillable = [
        'client_id',
        'phone',
        'comment'
    ];


    protected static function newFactory(): ClientPhoneFactory|Factory
    {
        return ClientPhoneFactory::new();
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
