<?php

namespace App\Models;

use Database\Factories\ClientEmailFactory;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ClientEmail
 *
 * @property int $id
 * @property string|null $email
 * @property int $client_id
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClientEmailFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientEmail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClientEmail extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'comment', 'client_id'];
    protected static function newFactory(): ClientEmailFactory|Factory
    {
        return ClientEmailFactory::new();
    }
}
