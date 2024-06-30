<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $item = Item::find($item_id);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $profile->img_url = $filename;
        $profile->postcode = $request->postcode;
        
        $profile->save();
        ])

        return view('comment', compact("item"));
    }
}
