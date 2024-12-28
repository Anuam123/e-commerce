<?php

namespace App\Http\Controllers\Admin\SubSubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubcategory = SubSubCategory::orderBy('id', 'DESC')->get();
        //dd($subsubcategory);
        return view('admin.subsubcategory.index', compact('subsubcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('*')->get();
        $subcategory = SubCategory::select('*')->get();
        //dd($subcategory);
        return view('admin.subsubcategory.create', compact('category', 'subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd(request()->all());

        $subsubcategory = new SubSubCategory;
        $subsubcategory->sub_category_id = $request->input("sub_category_id");
        $subsubcategory->category_names = $request->input("category_name");
        $subsubcategory->sub_category_names = $request->input("sub_category_name");
        $subsubcategory->link_type = $request->input("link_type");
        $subsubcategory->custom_link = $request->input("custom_link");
        $subsubcategory->sub_sub_category_name = $request->input("sub_sub_category_name");

        if ($request->hasFile('sub_sub_category_image')) {
            $sub_sub_category_image = $request->file('sub_sub_category_image');
            $filename = time() . '.' . $sub_sub_category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($subsubcategory->sub_category_image) {
                $oldImagePath = $path . '/' . $subsubcategory->sub_category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $sub_sub_category_image->move($path, $filename);
            $subsubcategory->sub_sub_category_image = $filename;
        }

        $subsubcategory->sort_order = $request->input("sort_order");
        $subsubcategory->status = $request->input("status");
        $subsubcategory->meta_title = $request->input("meta_title");
        $subsubcategory->meta_keyword = $request->input("meta_keyword");
        $subsubcategory->description = $request->input("description");
        $subsubcategory->save();
        return redirect()->route('subsubcategory.index')->with('success', 'Sub Sub created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubCategory $product)
    {
        return view('demo.show', compact('product'));
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $subsubcategory = SubSubCategory::find($id);

        $subcategory = SubCategory::select('*')->get();

        $category = Category::select('*')->get();

        //dd($category);

        return view('admin.subsubcategory.edit', compact('subcategory', 'category', 'subsubcategory'));
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        //dd(request()->all());

        $subsubcategory = SubSubCategory::find($id);
        $subsubcategory->sub_category_id = $request->input("sub_category_id");
        $subsubcategory->category_names = $request->input("category_name");
        $subsubcategory->sub_category_names = $request->input("sub_category_name");
        $subsubcategory->link_type = $request->input("link_type");
        $subsubcategory->custom_link = $request->input("custom_link");
        $subsubcategory->sub_sub_category_name = $request->input("sub_sub_category_name");

        if ($request->hasFile('sub_sub_category_image')) {
            $sub_sub_category_image = $request->file('sub_sub_category_image');
            $filename = time() . '.' . $sub_sub_category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($subsubcategory->sub_category_image) {
                $oldImagePath = $path . '/' . $subsubcategory->sub_category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $sub_sub_category_image->move($path, $filename);
            $subsubcategory->sub_sub_category_image = $filename;
        }

        $subsubcategory->sort_order = $request->input("sort_order");
        $subsubcategory->status = $request->input("status");
        $subsubcategory->meta_title = $request->input("meta_title");
        $subsubcategory->meta_keyword = $request->input("meta_keyword");
        $subsubcategory->description = $request->input("description");
        $subsubcategory->save();
        return Redirect::back()->with('success', 'subCategory Updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $subsubcategory = SubSubCategory::find($id);
        $subsubcategory->delete();
        return Redirect::back()->with('success', 'sub sub Deleted successfully!');
    }



    /**
     * Remove the specified resource from delete.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function SubCat(Request $request)
    {
        $subsubcategory = SubCategory::where('category_names', '=', $request->id)->get();
        return Response::json($subsubcategory);
    }
}
