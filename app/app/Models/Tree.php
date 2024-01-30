<?php

namespace App\Models;

use Database\Factories\TreeFactory;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tree
 *
 * @property int $id
 * @property mixed $region
 * @property string $type
 * @property string $action_at
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TreeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Tree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tree query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereActionAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tree whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tree extends Model
{
    use HasFactory;
    protected $fillable=[
        'region',
        'type',
        'action_at',
        'text',
        'client_id'
    ];
    protected static function newFactory():TreeFactory|Factory
    {
        return TreeFactory::new();
    }


}
