<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailArticle extends Model
{
    use HasFactory;

    protected $fillable = ['detail_id', 'title', 'article'];

    public function article()
    {
        return $this->hasOne(Detail::class);
    }
}
