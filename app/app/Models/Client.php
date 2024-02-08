<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Psy\VersionUpdater\Downloader\Factory;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $full_name
 * @property string $date_of_birth
 * @property int $sex
 * @property string $preferred_name
 * @property string $telegram
 * @property string $phone
 * @property string $phone_comment
 * @property string $email
 * @property string $email_comment
 * @property string $address
 * @property string $country_code
 * @property string $city
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereEmailComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhoneComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePreferredName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @property-read int|null $phone_count
 * @mixin \Eloquent
 */
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

    /**
     * @return HasMany
     */
    public function phones(): HasMany
    {
        return $this->hasMany(ClientPhone::class, 'client_id', 'id');
    }

    public function emails(): HasMany
    {
        return $this->hasMany(ClientEmail::class, 'client_id', 'id');
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'client_id', 'id');
    }

    public function task(): HasMany
    {
        return $this->hasMany(Task::class, 'client_id', 'id');
    }

    public function cardsActive(): HasMany
    {
        return $this->cards()->where('status_id', Card::CARD_STATUS_ACTIVE);
    }

    public function getAllPhones(): array
    {
        $phones = [$this->phone];
        foreach ($this->phones as $clientPhone) {
            $phones[] = $clientPhone->phone;
        }
        return $phones;
    }

    public function getAllEmails(): array
    {
        $emails = [$this->email];
        foreach ($this->emails as $clientEmail) {
            $emails[] = $clientEmail->email;
        }
        return $emails;
    }


}
