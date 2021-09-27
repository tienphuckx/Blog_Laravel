<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'shortDescription',
        'content',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
