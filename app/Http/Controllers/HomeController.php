<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\HomeSlider;
use App\Models\HomeBanner;
use App\Models\ProductGeneral;
use App\Models\ProductImageItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    $categories = Category::select('*')
    ->where('status', '=', 'Show')
    ->where('show_on_home','=','Yes')->get(); 
    //dd($categories); 

    $subcategories = SubCategory::all();
    $subsubcategories = Subsubcategory::all();
    $homeSlider = HomeSlider::all();
    $banners = HomeBanner::all();
    $new_arrival = ProductGeneral::select('*')
    ->where('show_in_new_arrival', '=', 'yes')->get();

    $trending_offers = ProductGeneral::select('*')
    ->where('show_in_tranding_offers', '=', 'yes')->get();

    $best_seller = ProductGeneral::select('*')
    ->where('show_in_best_seller', '=', 'yes')->get();

    $personalised_gifts = ProductGeneral::select('*')
    ->where('show_in_new_arrival', '=', 'yes')->get();

    $more_gifts = ProductGeneral::select('*')
    ->where('show_in_new_arrival', '=', 'yes')->get();

    $corporate_gifts = ProductGeneral::select('*')
    ->where('show_in_corporate_gifts', '=', 'yes')->with('productImageItems')
    ->limit(4)->get();

    //dd($corporate_gifts);
   
    $struction_box = ProductGeneral::select('*')
    ->where('show_in_new_arrival', '=', 'yes')->get();

    return view('welcome',compact('categories', 
    'subcategories', 'subsubcategories', 'homeSlider', 'banners', 
    'new_arrival', 'trending_offers', 'best_seller', 
    'personalised_gifts', 'more_gifts','corporate_gifts'));

    }
}
