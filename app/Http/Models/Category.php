<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


<<<<<<< HEAD
=======
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
    ];
    
>>>>>>> d6e6a5f502856b9769364cbece5dc70e4b556b90
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public static function getData()
    {
        return self::all();
    }
}
