<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.pages.index');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function cart()
    {
        return view('front.pages.cart');
    }
    public function checkout()
    {
        return view('front.pages.checkout');
    }

    public function shop()
    {
        return view('front.pages.shop');
    }
    public function about()
    {
        return view('front.pages.about');
    }

    public function single_shop(){
        return view('front.pages.shop-single');
    }
    // public function addToCart(Request $request, string $id)
    // {
    //     //

    //     $product = \App\Models\Products::find($id);
    //     $cartitem = new \App\Models\Cartitems();
    //     $cartitem->product_id = $product->id;
    //     $cartitem->user_id = auth()->user()->id;
    //     $cartitem->quantity = $request->quantity;
    //     $cartitem->save();

    //     return view('front.pages.cart');
    // }
}
