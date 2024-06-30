<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $comment = Comment::find($item_id);

        return view('', compact("comment"));
    }
}
