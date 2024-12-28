<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->input("category_name");

        if ($request->hasFile('category_image')) {
            $category_image = $request->file('category_image');
            $filename = time() . '.' . $category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($category->category_image) {
                $oldImagePath = $path . '/' . $category->category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $category_image->move($path, $filename);
            $category->category_image = $filename;
        }

        $category->sort_order = $request->input("sort_order");
        $category->status = $request->input("status");
        $category->show_on_home = $request->input("show_on_home");
        $category->meta_title = $request->input("meta_title");
        $category->meta_keyword = $request->input("meta_keyword");
        $category->description = $request->input("description");
        $category->save();
        return redirect()->route('category.index')->with('success', 'Ctegory created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Category $product)
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
        $category = Category::find($id);
        //dd($emp);
        return view('admin.category.edit', compact('category'));
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
        $category = Category::find($id);

        $category->category_name = $request->input("category_name");

        if ($request->hasFile('category_image')) {
            $category_image = $request->file('category_image');
            $filename = time() . '.' . $category_image->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($category->category_image) {
                $oldImagePath = $path . '/' . $category->category_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $category_image->move($path, $filename);
            $category->category_image = $filename;
        }


        $category->sort_order = $request->input("sort_order");
        $category->status = $request->input("status");
        $category->show_on_home = $request->input("show_on_home");
        $category->meta_title = $request->input("meta_title");
        $category->meta_keyword = $request->input("meta_keyword");
        $category->description = $request->input("description");
        $category->save();
        return Redirect::back()->with('success', 'Category Updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return Redirect::back()->with('success', 'category Deleted successfully!');
    }
}
