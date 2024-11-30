<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::orderBy('id','asc')->simplePaginate(5);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**s
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $data['create_user_id'] = auth()->user()->id;
        Category::create($data);
        return to_route('dashboard.categories.index')->with('Category_Created_Sucessfully',"The Category has been Created Sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $category = Category::findOrFail($id);

        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    // app/Http/Controllers/Dashboard/CategoryController.php

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories,title,' . $id,
            'description' => 'nullable|string',
        ]);
        $category = Category::findOrFail($id);

        $category->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_by' => auth()->id(),
        ]);
        return redirect()->route('dashboard.categories.index')->with('Updated_Category_Sucessfully', "The Category has been Updated Sucessfully");
    }

    public function delete()
    {
        $categories = Category::orderby('id', 'desc')->onlyTrashed()->simplePaginate(10);
        $categories_count = $categories->count();
        return view('admin.categories.delete', compact('categories', 'categories_count'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $category->save();
        return redirect()->route('dashboard.categories.delete')->with('success', 'Category deleted successfully!');
    }

    public function restore($id)
    {
        if(auth()->user()->user_type == 'admin'){
            $category = Category::withTrashed()->find($id);
            $category->restore();
            $category->update_user_id = auth()->user()->id;
            $category->save();
            return redirect()->route('dashboard.categories.index')->with('Restored', "The Category ($category->title) has been Restored Successfully");
        }
        return abort(403,'You Are No Authrize ');

    }
    public function forceDelete($id)
    {
        $category = Category::where('id', $id);
        $category->forceDelete();
        return redirect()->route('dashboard.categories.delete')->with('ForceDeleted', "The Category has been Deleted Sucessfully");
    }
}
