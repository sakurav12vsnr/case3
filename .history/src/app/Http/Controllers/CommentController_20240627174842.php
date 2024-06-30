<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $item = Item::find($item_id);

        return view('comment', compact("item"));
    }

    public function commentCreate(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->item_id = $request->item_id;
        $comment->user_id = 
    }
}
