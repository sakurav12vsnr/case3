<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_url',
        'name',
        'description',
        'price',
        'user_id',
        'condition_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function sold_items()
    {
        return $this->belongsToMany(User::class, 'sold_items');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_items')->withTimestamps();
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }

    public static function conditionFormat($conditions)
    {
        $result = "";
        foreach ($conditions as $index => $condition) {
            if($index == 0){
                $result = $result . "・" . $condition;
            }
        }
        return $result;
    }

    public static function searchItems($keyword)
    {
        $query = Item::query();
        $conditions = array();

        if (!empty($keyword)) {
            array_push($conditions, $keyword);
            $query->where('name', 'like', "%$keyword%");
        }

        $items = $query->get();
        $text = self::conditionFormat($conditions);

        return compact('items', 'text');
    }
}
