<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $SubCategories= SubCategories::all();
        return view('admin.sub-categories.index', compact('SubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Categories = \App\Models\Category::all();
        return view("admin.sub-categories.create", compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'         =>'required|string|unique:sub_categories,title|max:250',
            'description'   =>'nullable|string|max:1000',
            'category_id'   =>'required|exists:categories,id',
            'create_user_id'=>'nullable|exists:users,id',
            'update_user_id'=>'nullable|exists:users,id',
        ]);
        $subcategories= new SubCategories();
        $subcategories->title=$request->title;
        $subcategories->description=$request->description;
        $subcategories->category_id=$request->category_id;
        $subcategories->create_user_id=auth()->user()->id;
        $subcategories->update_user_id=null;
        $subcategories->save();
        return redirect()->route('dashboard.sub-categories.index')->with('Sub-Category_Created_Sucessfully', "The Sub-Category ($subcategories->title) has been Created Sucessfully");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $subcategory= SubCategories::find($id);
        return view('admin.sub-categories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $subcategory = SubCategories::find($id);
        if($subcategory==null){
            return view('admin.sub-categories.404.cat-404');
        }else{
            if (auth()->user()->user_type == 'admin') {
                return view('admin.sub-categories.edit', compact('subcategory'));
            }else{
                return view('admin.sub-categories.404.cat-404');
            }
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255|unique:sub_categories,title,'. $id .'|max:250',
            'description' => 'nullable|string',
            'create_user_id' => 'nullable|exists:users,id',
            'update_user_id' => 'nullable|exists:users,id',
        ]);
        $subcategory_old = SubCategories::find($id);
        $subcategory = SubCategories::find($id);
        $subcategory->title = $request->title;
        // if($subcategory->title == $request->title){
        //     $subcategory->title= $subcategory->title;
        // }else{

        // }
        $subcategory->title = $request->title;
        $subcategory->description = $request->description;
        $subcategory->update_user_id = auth()->user()->id;
        $subcategory->save();
        return redirect()->route('dashboard.sub-categories.index')->with('Updated_Sub-Category_Successfully',"The Sub-Category ($subcategory->title) has been Updated Successfully");

    }

    public function delete(){
        $subcategories= SubCategories::orderby('id', 'desc')->onlyTrashed()->simplePaginate(10);
        $subcategories_count= $subcategories->count();
        return view('admin.sub-categories.delete', compact('subcategories','subcategories_count'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subcategories = SubCategories::find($id);
        $subcategories->delete();
        $subcategories->save();
        return redirect()->route('dashboard.sub-categories.delete');
    }

    public function restore($id){
        $subcategory= SubCategories::withTrashed()->find($id);
        $subcategory->restore();
        $subcategory->update_user_id=auth()->user()->id;
        $subcategory->save();
        return redirect()->route('dashboard.sub-categories.index')->with('Restored',"The Sub-Category ($subcategory->title) has been Restored Successfully");
    }

    public function forceDelete($id){
        $subcategory= SubCategories::where('id', $id);
        $subcategory->forceDelete();
        return redirect()->route('dashboard.sub-categories.delete')->with('ForceDeleted',"The Sub-Category has been Deleted Sucessfully");
    }
}
