<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Catalog
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Catalog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Catalog whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Catalog wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Catalog whereUpdatedAt($value)
 */
class Catalog extends Model
{
    protected $fillable = ['name', 'path'];


    public static function nameCatalog($name, $catalog = null)
    {
        if ($catalog == null) return (new static)->create(['name' => $name, 'path' => env('DIR_CATALOG') . $name]);

        return $catalog->catalogUpdate($name, $catalog);

    }

    public function catalogUpdate($name, $catalog)
    {
        Storage::delete($catalog->path);

        $catalog->update(['name' => $name, 'path' => env('DIR_CATALOG') . $name]);

        return $this;
    }

    public function storCatalog($file)
    {
        $file->storeAs('catalogs', $this->name);
    }
}
