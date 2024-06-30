<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create($item_id)
    {
        $item = Item::find($item_id);

        return view('comment', compact("item"));
    }
}
