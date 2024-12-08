<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public static function getData()
    {
        return self::all();
    }
}
