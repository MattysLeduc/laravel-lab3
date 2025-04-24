<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    //
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
