<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function index()
    {
        $footer = Footer::find(1);
        $items  = Items::all();
        return view('shop-magazine', compact('footer', 'items'));
    }

    public function detail()
    {
        $footer = Footer::find(1);
        return view('show-product', compact('footer', 'contact'));
    }
    public function cart()
    {
        $footer = Footer::find(1);
        return view('cart', compact('footer', 'contact'));
    }


}
