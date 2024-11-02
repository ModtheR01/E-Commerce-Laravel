<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $subcategories = \App\Models\SubCategories::all();
        return view('admin.products.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'                  => 'required|string|unique:products,title|max:255',
            'image'                    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'description'           => 'nullable|string|max:1020',
            'price'                 => 'required|numeric|max:1020',
            'available_quantity'    => 'required|numeric|max:1020',
            'sub_category_id'       => 'required|exists:sub_categories,id',
            'update_user_id'        => 'nullable,exists:users,id',
            'create_user_id'        => 'nullable,exists:users,id',
        ]);
        $products = new Products();
        $products->title=$request->title;
        $products->description=$request->description;
        $products->price=$request->price;
        $products->available_quantity=$request->available_quantity;
        $products->sub_category_id=$request->sub_category_id;
        $products->create_user_id=auth()->user()->id;
        $products->update_user_id=null;
        $products->save();
        return redirect()->route('dashboard.products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Products::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Products::find($id);
        if (auth()->user()->user_type == 'admin'){
            return view('admin.products.edit', compact('product'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title'                  => 'required|string|max:255|unique:products,title,'.$id,
            'image'                    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'description'           => 'nullable|string|max:1020',
            'price'                 => 'required|numeric|max:1020',
            'available_quantity'    => 'required|numeric|max:1020',
            'update_user_id'        => 'nullable,exists:users,id',
        ]);
        $product = Products::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->available_quantity=$request->available_quantity;
        $product->update_user_id=auth()->user()->id;
        $product->save();
        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Products::find($id);
        $product->delete();
        $product->save();
        return redirect()->route('dashboard.products.delete');
    }

    public function delete(){
        $products = Products::orderby('id', 'desc')->onlyTrashed()->simplePaginate(10);
        $product_counts = $products->count();
        return view('admin.products.delete', compact('products', 'product_counts'));
    }

    public function restore($id){
        $product = Products::withTrashed()->where('id', $id)->find($id);
        $product->restore();
        return redirect()->route('dashboard.products.index');
    }

    public function forceDelete($id){
        $product = Products::where('id', $id);
        $product->forceDelete();
        return redirect()->route('dashboard.products.delete');
    }
}
