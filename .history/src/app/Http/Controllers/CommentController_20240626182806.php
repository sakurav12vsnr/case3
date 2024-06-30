<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $item = Item::find($item_id);

        return view('comment', compact("comment"));
    }
}
