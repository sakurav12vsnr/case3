<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function comments()
    {
        return $this->belongsToMany(User::class, 'comments');
    }

    public function sold_items()
    {
        return $this->belongsToMany(User::class, 'sold_items');
    }

    public function category_items()
    {
        return $this->belongsToMany()
    }
}
