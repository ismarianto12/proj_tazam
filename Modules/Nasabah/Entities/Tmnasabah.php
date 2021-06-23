<?php

namespace Modules\Nasabah\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tmnasabah extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'tmnasabah';
    protected $guarded = [];

    // protected static function newFactory()
    // {
    //     return \Modules\Nasabah\Database\factories\TmnasabahFactory::new();
    // }
}
