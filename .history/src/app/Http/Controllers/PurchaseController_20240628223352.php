<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index($item_id)
    {
        $item = Item::find($item_id);

        $user = Auth::user();

        return view('purchase', compact("item", "user"));
    }

    public function purchase(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->item_id = $request->item_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->back();
    }

    public function address()
    {
        return view('address');
    }
}
