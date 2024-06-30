<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Condition;
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
        return view('sell', compact("categories", "conditions"));
    }

    public function sellCreate(Request $request)
    {
        $item = new Item();
        $item->img_url = $request->img_url;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->user_id = Auth::id();
        $item->condition_id 

        $category_item = new Category();
        $category->category = $request->category;
    }
}

