<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\{Category, Product};

class ProductController extends Controller
{
    //
    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        $categoriesCount=count($categories);
        $electronicsCount= Category::where('title', 'Electronics')
        // ->product()
        ->count();
        return view('front.pages.shop', compact('products','categories','categoriesCount','electronicsCount'));
        $products = \App\Models\Product::all();
        $categories = \App\Models\Category::all();
        return view('front.pages.shop', compact('products','categories'));
    }

    public function singleProduct($id)
    {
        $product = \App\Models\Product::find($id);
        return view('front.pages.shop-single', compact('product'));

    }




    // public function addcart($id){
    //     if(auth()->user()){
    //         $products = \App\Models\Product::find($id);
    //         return view('front.pages.cart', compact('products'));
    //     }
    //     // return redirect()->route('login');
    // }
}
