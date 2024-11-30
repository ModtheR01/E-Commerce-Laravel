<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Products::findOrFail($productId);
        // Check if the product is already in the cart for the user
        $cartItem = Cart::where('product_id', $productId)
            ->where('user_id', auth()->id())
            ->first();
        $quantity= $request->input('quantity', 1);
        $totalPrice = $product->price * $quantity;
        if ($cartItem) {
            // Update the quantity if the product already exists in the cart
            $cartItem->update(['quantity' => $cartItem->quantity + $quantity]);
            $cartItem->update(['total_price' => $cartItem->total_price + $totalPrice ]);
            // $product->available_quantity -= $cartItem->quantity;
        } else {
            // Create a new cart item if it doesn't exist
            Cart::create([
                'product_id' => $product->id,
                'product_price' => $product->price,
                'product_title' => $product->title,
                'product_image' => $product->image,
                'total_price' => $totalPrice,
                'user_id' => auth()->id(),
                'quantity' => $quantity,
            ]);
        }
        $product->available_quantity -= $quantity;
        $product->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        $totalPrice = $cartItems->sum('total_price');
        return view('front.pages.cart', compact('cartItems','totalPrice'));
    }

    public function updateCart(Request $request, $productId){
        $cartItem = Cart::where('product_id', $productId)
            ->where('user_id', auth()->id())
            ->first();
        $product = Products::findOrFail($productId);
        $newQuantity = $request->input('quantity');
        if ($newQuantity <= $product->available_quantity)
        {
            $totalPrice = $cartItem->product->price * $newQuantity;
            $cartItem->quantity = $newQuantity;
            $cartItem->total_price = $totalPrice;
            $product->available_quantity -= $newQuantity;
        }
        $product->save();
        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    public function remove ($cid,$pid)
    {
        $cart = Cart::findOrFail($cid);
        $product = Products::findOrFail($pid);
        $product->available_quantity += $cart->quantity;
        $product->save();
        $product->delete();
        return view('front.pages.cart');
    }


}
