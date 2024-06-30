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

        Comment::create([
            
        ])

        return view('comment', compact("item"));
    }
}
