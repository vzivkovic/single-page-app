<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $worktime
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereWorktime($value)
 */
class Contact extends Model
{
    protected $fillable = ['address', 'phone', 'email', 'timework_at'];
    //
}
