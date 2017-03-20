<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Welcome
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Welcome whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Welcome whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Welcome whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Welcome whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Welcome whereUpdatedAt($value)
 */
class Welcome extends Model
{
    protected $fillable = ['title', 'body'];
}
