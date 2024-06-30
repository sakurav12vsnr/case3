<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Category_item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('index', compact("items"));
    }

    public function detail($item_id)
    {
        $item = Item::find($item_id)->with('condition', 'category.category')->first();

        return view('detail', compact("item"));
    }

    public function sellView()
    {
        $categories = Category::all();
        $conditions = Condition::all();
        return view('sell', compact("categories", "conditions"));
    }

    public function sellCreate(Request $request)
    {
        $file = $request->file('img_url');
        if(!empty($file)) {
            $filename = $file->getClientOriginalName();
            $move = $file->move('images/', $filename);
        }else{
            $filename="";
        }

        $item = new Item();
        $item->img_url = $filename;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->user_id = Auth::id();
        $item->condition_id = $request->condition_id;
        $item->save();

        $category_item = $request->category_id;
        $item->categories()->attach($category_item);

        return redirect('sell');
    }
}

