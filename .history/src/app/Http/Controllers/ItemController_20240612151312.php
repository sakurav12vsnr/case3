<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\
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
        return view('sell');
    }
}
