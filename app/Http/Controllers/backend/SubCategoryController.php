<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategoryService;
    public function __construct(SubCategoryService $subCategoryService){
        $this->subCategoryService=$subCategoryService;
    }
    public function index()
    {
        $all_subCategories=SubCategory::latest()->with('category')->get();
        return view('backend.admin.subcategory.index',compact('all_subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_categories=Category::orderBy('name','asc')->get();
        return view('backend.admin.subcategory.create',compact('all_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        $this->subCategoryService->saveSubCategory($request->validated());
        return redirect()->back()->with('success','SubCategory created successfully');
    }

    
    public function edit(string $id)
    {
         $subCategory=SubCategory::find($id);
         $all_categories=Category::orderBy('name','asc')->get();
        return view('backend.admin.subcategory.edit',compact('subCategory','all_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryRequest $request, string $id)
    {
         $this->subCategoryService->updateSubCategory($request->validated(),$id);
        return redirect()->back()->with('success','SubCategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory=SubCategory::findOrFail($id);
        $subCategory->delete();
        return redirect()->back()->with('success','SubCategory deleted successfully');
    }
}
