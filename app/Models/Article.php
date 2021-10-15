<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'shortDescription',
        'content',
        'category_id',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
