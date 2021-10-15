<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
