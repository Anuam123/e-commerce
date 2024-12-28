<?php

namespace App\Http\Controllers\Admin\SubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategory::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('*')->get();
        //dd($category);
        return view('admin.subcategory.create', compact('category'));
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

        $subcategory = new SubCategory;
        $subcategory->category_id = $request->input("category_id");
        $subcategory->category_names = $request->input("category_name");
        $subcategory->link_type = $request->input("link_type");
        $subcategory->custom_link = $request->input("custom_link");
        $subcategory->sub_category_name = $request->input("sub_category_name");

        if ($request->hasFile('sub_category_image')) {
            $sub_category_image = $request->file('sub_category_image');
            $filename = time() . '.' . $sub_category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($subcategory->sub_category_image) {
                $oldImagePath = $path . '/' . $subcategory->sub_category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $sub_category_image->move($path, $filename);
            $subcategory->sub_category_image = $filename;
        }

        $subcategory->sort_order = $request->input("sort_order");
        $subcategory->status = $request->input("status");
        $subcategory->meta_title = $request->input("meta_title");
        $subcategory->meta_keyword = $request->input("meta_keyword");
        $subcategory->description = $request->input("description");
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('success', 'Ctegory created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $product)
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

        $subcategory = SubCategory::find($id);

        $category = Category::select('*')->get();

        // $result = DB::table('sub_categories')
        //         ->where('sub_categories.id', $id)
        //         ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
        //         ->select('sub_categories.*', 'categories.*')
        //         ->first();

        return view('admin.subcategory.edit', compact('subcategory', 'category'));
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



        $subcategory = SubCategory::find($id);
        $subcategory->category_id = $request->input("category_id");
        $subcategory->category_names = $request->input("category_name");
        $subcategory->link_type = $request->input("link_type");
        $subcategory->custom_link = $request->input("custom_link");
        $subcategory->sub_category_name = $request->input("sub_category_name");

        if ($request->hasFile('sub_category_image')) {
            $sub_category_image = $request->file('sub_category_image');
            $filename = time() . '.' . $sub_category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($subcategory->sub_category_image) {
                $oldImagePath = $path . '/' . $subcategory->sub_category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $sub_category_image->move($path, $filename);
            $subcategory->sub_category_image = $filename;
        }

        $subcategory->sort_order = $request->input("sort_order");
        $subcategory->status = $request->input("status");
        $subcategory->meta_title = $request->input("meta_title");
        $subcategory->meta_keyword = $request->input("meta_keyword");
        $subcategory->description = $request->input("description");
        $subcategory->save();
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
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        return Redirect::back()->with('success', 'category Deleted successfully!');
    }
}
