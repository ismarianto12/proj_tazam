<?php

namespace Modules\Aplikasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tmmodul extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'tmmodul';


    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('kode', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('permision', 'like', '%' . $search . '%');
    }
}
