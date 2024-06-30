<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url
        'category'
        'condition' => $request['condition'],
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'user_id' => Auth::id(),'
    ]

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
        return $this->belongsToMany(Category::class, 'category_items');
    }

    public function conditions()
    {
        return $this->hasMany(Condition::class);
    }
}