<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index($item_id)
    {
        $item = Item::find($item_id);

        $user = Auth::user();

        $comments = Comment::where('user_id', Auth::id())->get();

        return view('comment', compact("item", "user", "comments"));
    }

    public function address()
    {
        return view('address');
    }
}
