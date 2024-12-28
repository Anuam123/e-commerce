<?php

namespace App\Http\Controllers\Admin\HomeSlider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Redirect;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = HomeSlider::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.home_slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliders = new HomeSlider;
        $sliders->type = $request->input("type");
        $sliders->banner_title = $request->input("banner_title");
        $sliders->banner_link = $request->input("banner_link");

        if ($request->hasFile('banner_images')) {
            $banner_images = $request->file('banner_images');
            $filename = time() . '.' . $banner_images->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($sliders->category_image) {
                $oldImagePath = $path . '/' . $sliders->banner_images;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_images->move($path, $filename);
            $sliders->banner_images = $filename;
        }

        $sliders->sort_order = $request->input("sort_order");
        $sliders->description = $request->input("description");
        $sliders->status = $request->input("status");
        $sliders->save();
        return redirect()->route('home_slider.index')->with('success', 'Slider created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $product)
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
        $sliders = HomeSlider::find($id);
        //dd($emp);
        return view('admin.home_slider.edit', compact('sliders'));
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
        //dd($request()->all());
        $sliders = HomeSlider::find($id);
        $sliders->type = $request->input("type");
        $sliders->banner_title = $request->input("banner_title");
        $sliders->banner_link = $request->input("banner_link");

        if ($request->hasFile('banner_images')) {
            $banner_images = $request->file('banner_images');
            $filename = time() . '.' . $banner_images->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($sliders->category_image) {
                $oldImagePath = $path . '/' . $sliders->banner_images;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_images->move($path, $filename);
            $sliders->banner_images = $filename;
        }

        $sliders->sort_order = $request->input("sort_order");
        $sliders->description = $request->input("description");
        $sliders->status = $request->input("status");
        $sliders->save();
        return Redirect::back()->with('success', 'Attribute Updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = HomeSlider::find($id);
        $sliders->delete();
        return Redirect::back()->with('success', 'Attribute Deleted successfully!');
    }
}
