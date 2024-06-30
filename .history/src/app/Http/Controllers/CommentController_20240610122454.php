<?php

namespace App\Http\Controllers;

use App\Models
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view('comment');
    }
}
