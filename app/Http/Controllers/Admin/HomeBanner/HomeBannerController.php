<?php

namespace App\Http\Controllers\Admin\HomeBanner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeBanner;
use Illuminate\Support\Facades\Redirect;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = HomeBanner::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.home_banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banners = new HomeBanner;

        if ($request->hasFile('banner_image_one')) {
            $banner_image_one = $request->file('banner_image_one');
            $filename_one = time() . '_one.' . $banner_image_one->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_one) {
                $oldImagePath = $path . '/' . $banners->banner_image_one;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_one->move($path, $filename_one);
            $banners->banner_image_one = $filename_one;
        }

        if ($request->hasFile('banner_image_two')) {
            $banner_image_two = $request->file('banner_image_two');
            $filename_two = time() . '_two.' . $banner_image_two->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_two) {
                $oldImagePath = $path . '/' . $banners->banner_image_two;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_two->move($path, $filename_two);
            $banners->banner_image_two = $filename_two;
        }

        if ($request->hasFile('banner_image_three')) {
            $banner_image_three = $request->file('banner_image_three');
            $filename_three = time() . '_three.' . $banner_image_three->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_three) {
                $oldImagePath = $path . '/' . $banners->banner_image_three;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_three->move($path, $filename_three);
            $banners->banner_image_three = $filename_three;
        }


        if ($request->hasFile('banner_image_four')) {
            $banner_image_four = $request->file('banner_image_four');
            $filename_four = time() . '_four.' . $banner_image_four->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_four) {
                $oldImagePath = $path . '/' . $banners->banner_image_four;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_four->move($path, $filename_four);
            $banners->banner_image_four = $filename_four;
        }


        if ($request->hasFile('banner_image_five')) {
            $banner_image_five = $request->file('banner_image_five');
            $filename_five = time() . '_five.' . $banner_image_five->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_five) {
                $oldImagePath = $path . '/' . $banners->banner_image_five;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_five->move($path, $filename_five);
            $banners->banner_image_five = $filename_five;
        }


        if ($request->hasFile('banner_image_six')) {
            $banner_image_six = $request->file('banner_image_six');
            $filename_six = time() . '_six.' . $banner_image_six->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_six) {
                $oldImagePath = $path . '/' . $banners->banner_image_six;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_six->move($path, $filename_six);
            $banners->banner_image_six = $filename_six;
        }


        $banners->save();
        return redirect()->route('home_banner.index')->with('success', 'Banner created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $product)
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
        $banners = HomeBanner::find($id);
        //dd($emp);
        return view('admin.home_banner.edit', compact('banners'));
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
        $banners = HomeBanner::find($id);
        if ($request->hasFile('banner_image_one')) {
            $banner_image_one = $request->file('banner_image_one');
            $filename = time() . '.' . $banner_image_one->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_one) {
                $oldImagePath = $path . '/' . $banners->banner_image_one;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_one->move($path, $filename);
            $banners->banner_image_one = $filename;
        }

        if ($request->hasFile('banner_image_two')) {
            $banner_image_two = $request->file('banner_image_two');
            $filename = time() . '.' . $banner_image_two->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_two) {
                $oldImagePath = $path . '/' . $banners->banner_image_two;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_two->move($path, $filename);
            $banners->banner_image_two = $filename;
        }

        if ($request->hasFile('banner_image_three')) {
            $banner_image_three = $request->file('banner_image_three');
            $filename = time() . '.' . $banner_image_three->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_three) {
                $oldImagePath = $path . '/' . $banners->banner_image_three;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_three->move($path, $filename);
            $banners->banner_image_three = $filename;
        }

        if ($request->hasFile('banner_image_four')) {
            $banner_image_four = $request->file('banner_image_four');
            $filename = time() . '.' . $banner_image_four->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_four) {
                $oldImagePath = $path . '/' . $banners->banner_image_four;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_four->move($path, $filename);
            $banners->banner_image_four = $filename;
        }

        if ($request->hasFile('banner_image_five')) {
            $banner_image_five = $request->file('banner_image_five');
            $filename = time() . '.' . $banner_image_five->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_five) {
                $oldImagePath = $path . '/' . $banners->banner_image_five;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_five->move($path, $filename);
            $banners->banner_image_five = $filename;
        }

        if ($request->hasFile('banner_image_six')) {
            $banner_image_six = $request->file('banner_image_six');
            $filename = time() . '.' . $banner_image_six->getClientOriginalExtension();
            $path = public_path('images');

            // Delete the old image if needed
            if ($banners->banner_image_six) {
                $oldImagePath = $path . '/' . $banners->banner_image_six;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $banner_image_six->move($path, $filename);
            $banners->banner_image_six = $filename;
        }

        $banners->save();
        return Redirect::back()->with('success', 'Banner Updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = HomeBanner::find($id);
        $sliders->delete();
        return Redirect::back()->with('success', 'Attribute Deleted successfully!');
    }
}
