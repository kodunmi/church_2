<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = ['title', 'created_by', 'body', 'preview', 'feature', 'image'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
