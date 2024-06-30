<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Item;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($item_id)
    {
        $item = Item::where('id', $id)->get();

        return view('comment', compact("item"));
    }
}
