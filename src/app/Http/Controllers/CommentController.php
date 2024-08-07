<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Item;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $item = Item::find($item_id);

        $user = Auth::user();

        $comments = Comment::where('user_id', Auth::id())->get();

        return view('comment', compact("item", "user", "comments"));
    }

    public function commentCreate(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->item_id = $request->item_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->back();
    }
}
