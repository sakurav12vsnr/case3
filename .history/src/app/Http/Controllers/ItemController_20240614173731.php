<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail()
    {
        return view('detail');
    }

    public function sellView()
    {
        $categories = Category::all();
        $conditions = Condition::all();
        return view('/sell', compact("categories", "conditions"));
    }
}
