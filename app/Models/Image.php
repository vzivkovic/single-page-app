<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $image
 * @property bool $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Image whereUpdatedAt($value)
 */
class Image extends Model
{
    protected $fillable = ['image'];

    public function getImageAttribute($value)        //REMINDER: thos os propety get(name Atribut)
    {
        return env('DIR_IMAGES') . $value;
    }

    public static function imageName($name, $image = null){

        if ($image == null) return (new static)->create(['image' => $name]);

        return $image->imageUpdate($name, $image);

    }

    public function imageUpdate($name, $image)
    {
        Storage::delete($image->image);

        $image->update(['name' => $name]);

        return $this;
    }

    public function storeImage(UploadedFile $file)
    {
        $file->storeAs('', $this->image);
    }


}
