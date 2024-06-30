<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PurchaseController extends Controller
{
    public function index($item_id)
    {
        $item = Item::find($item_id);

        $user = Auth::user();

        return view('purchase', compact("item", "user"));
    }

    public function address()
    {
        return view('address');
    }
}
