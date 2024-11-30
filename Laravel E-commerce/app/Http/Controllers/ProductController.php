<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\{Category, Products};

class ProductController extends Controller
{
    //
    public function shop()
    {
        $products = Products::all();
        $categories = Category::all();
        $categoriesCount=count($categories);
        $electronicsCount= Category::where('title', 'Electronics')
        // ->product()
        ->count();
        return view('front.pages.shop', compact('products','categories','categoriesCount','electronicsCount'));
    }

    public function singleProduct($id)
    {
        $product = \App\Models\Products::find($id);
        return view('front.pages.shop-single', compact('product'));

    }




}
