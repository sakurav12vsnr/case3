<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Sold_item;
use App\Models\Profile;
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
        $sold_item = new Sold_item();
        $sold_item->item_id = $request->item_id;
        $sold_item->user_id = Auth::id();
        $sold_item->save();

        return redirect('/');
    }

    public function address($profile_id)
    {
        $profile = Profile::find($profile_id);

        return view('address');
    }

    public function updateAddress(Request $request)
    {
        $profile = Profile::where('user_id', Auth::id())->get();
        $profile = Profile::find($profile_id)->update($profile);
        $profile->postcode = $request->postcode;
        $profile->address = $request->address;
        $profile->building = $request->building;
        $profile->save();

        return redirect('purchase');
    }
}
