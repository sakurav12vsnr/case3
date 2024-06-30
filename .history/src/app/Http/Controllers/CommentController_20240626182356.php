<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentView($item_id)
    {
        $comment = Item::find($item_id);

        return view('detail', compact("item"));
    }
    }
}
