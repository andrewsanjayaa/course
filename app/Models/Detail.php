<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'image', 'url', 'short_description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
