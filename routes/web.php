<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\User\UserController;

use App\Http\Controllers\Admin\AdminAuthController;

use App\Http\Controllers\Vendor\VendorAuthController;

use App\Http\Controllers\front\VendorRegisterController;

use App\Http\Controllers\Vendor\Vendorinfo\VendorInfoController;

use App\Http\Controllers\Admin\Category\CategoryController;

use App\Http\Controllers\Admin\SubCategory\SubCategoryController;

use App\Http\Controllers\Admin\SubSubCategory\SubSubCategoryController;

use App\Http\Controllers\Admin\ProductAttributeType\ProductAttributeTypeController;

use App\Http\Controllers\Admin\ProductAttribute\ProductAttributeController;

use App\Http\Controllers\Admin\HomeSlider\HomeSliderController;

use App\Http\Controllers\Admin\HomeBanner\HomeBannerController;

use App\Http\Controllers\Admin\AddProduct\AddProductController;
<<<<<<< HEAD

=======
use App\Http\Controllers\Admin\OrderCoupon\OrderCouponController;
>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
use App\Http\Controllers\Admin\ProductReview\ProductReviewController;

use App\Models\Category;

<<<<<<< HEAD
=======

>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
use App\Models\SubCategory;

use App\Models\SubSubCategory;

use App\Models\HomeSlider;

use App\Models\HomeBanner;

use App\Models\ProductGeneral;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*------------------------------------------
--------------------------------------------
All frontend Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('/clear-cache-all', function () {
    Artisan::call('cache:clear');

    dd("Cache Clear All");
});

<<<<<<< HEAD
//Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/', function () {

    $categories = Category::select('*')
    ->where('status', '=', 'Show')
    ->where('show_on_home','=','Yes')->get(); 
    //dd($categories); 

=======
Route::get('/', function () {

    $categories = Category::all();
>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
    $subcategories = SubCategory::all();
    $subsubcategories = Subsubcategory::all();
    $homeSlider = HomeSlider::all();
    $banners = HomeBanner::all();
<<<<<<< HEAD
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

    //dd($banners);
    return view('welcome',compact('categories', 
    'subcategories', 'subsubcategories', 'homeSlider', 'banners', 
    'new_arrival', 'trending_offers', 'best_seller', 
    'personalised_gifts', 'more_gifts','corporate_gifts'));
});



// Route::get('/', [HomeController::class, 'index'])->name('home.index');

=======
    $new_arrival = ProductGeneral::select('*')->where('show_in_new_arrival', '=', 'yes')->get();

    $trending_offers = ProductGeneral::select('*')->where('show_in_tranding_offers', '=', 'yes')->get();

    $best_seller = ProductGeneral::select('*')->where('show_in_best_seller', '=', 'yes')->get();

    $personalised_gifts = ProductGeneral::select('*')->where('show_in_new_arrival', '=', 'yes')->get();

    $more_gifts = ProductGeneral::select('*')->where('show_in_new_arrival', '=', 'yes')->get();

    $corporate_gifts = ProductGeneral::select('*')->where('show_in_new_arrival', '=', 'yes')->get();

    $struction_box = ProductGeneral::select('*')->where('show_in_new_arrival', '=', 'yes')->get();


    //dd($banners);
    return view('welcome', compact('categories', 'subcategories', 'subsubcategories', 'homeSlider', 'banners', 'new_arrival', 'trending_offers', 'best_seller', 'personalised_gifts', 'more_gifts'));
});

>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
Auth::routes();

Route::resource('myaccount', MyAccountController::class);

// Route::get('products', [SubSubCategoryController::class, 'product'])->name('products');

// Route::get('products', [SubSubCategoryController::class, 'product'])->name('products');


Route::get('/products/{products:custom_link}', function (SubSubCategory $SubSubCategory) {

    $categories = Category::select('*')->get();
    $subcategories = SubCategory::select('*')->get();
    $subsubcategories = SubSubCategory::select('*')->get();
    $product = SubSubCategory::select('*')
        ->join('product_generals', 'sub_sub_categories.id', '=', 'product_generals.sub_sub_category_id')
        ->get();

    //dd($product);

    return view('front.products.products', compact('categories', 'subcategories', 'subsubcategories', 'SubSubCategory', 'product'));
});



Route::get('/singleproduct/{product:custom_link}', function (SubSubCategory $SubSubCategory, $id) {


    $categories = Category::select('*')->get();
    $subcategories = SubCategory::select('*')->get();
    $subsubcategories = SubSubCategory::select('*')->get();
    $product = SubSubCategory::select('*')
        ->join('product_generals', 'sub_sub_categories.id', '=', 'product_generals.sub_sub_category_id')
        ->get();

    $singleproduct = ProductGeneral::find($id);

    //dd($singleproduct);

    return view('front.products.singleProduct', compact('categories', 'subcategories', 'subsubcategories', 'SubSubCategory', 'product','singleproduct'));
});




Route::resource('vendor_register', VendorRegisterController::class);
Route::get('vendor_register/{id}/view', [VendorRegisterController::class, 'show']);
Route::get('vendor_register/{id}/delete', [VendorRegisterController::class, 'destroy']);







/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('adminHome');
        })->name('adminDashboard');

        //roles
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);


        //category
        Route::resource('category', CategoryController::class);
        Route::get('category/{id}/edit', [CategoryController::class, 'edit']);
        Route::get('category/{id}/delete', [CategoryController::class, 'destroy']);


        //subcategory
        Route::resource('subcategory', SubCategoryController::class);
        Route::get('subcategory/{id}/edit', [SubCategoryController::class, 'edit']);
        Route::get('subcategory/{id}/delete', [SubCategoryController::class, 'destroy']);


        //subsubcategory
        Route::resource('subsubcategory', SubSubCategoryController::class);
        Route::get('subsubcategory/{id}/edit', [SubSubCategoryController::class, 'edit']);
        Route::get('subsubcategory/{id}/delete', [SubSubCategoryController::class, 'destroy']);
        Route::post('subc', [SubSubCategoryController::class, 'SubCat'])->name('subc');


        //ProductAttribute type
        Route::resource('product_attribute_type', ProductAttributeTypeController::class);
        Route::get('product_attribute_type/{id}/edit', [ProductAttributeTypeController::class, 'edit']);
        Route::get('product_attribute_type/{id}/delete', [ProductAttributeTypeController::class, 'destroy']);


        //ProductAttribute
        Route::resource('product_attribute', ProductAttributeController::class);
        Route::get('product_attribute/{id}/edit', [ProductAttributeController::class, 'edit']);
        Route::get('product_attribute/{id}/delete', [ProductAttributeController::class, 'destroy']);


        //Home Slider
        Route::resource('home_slider', HomeSliderController::class);
        Route::get('home_slider/{id}/edit', [HomeSliderController::class, 'edit']);
        Route::get('home_slider/{id}/delete', [HomeSliderController::class, 'destroy']);


        //Home Banner
        Route::resource('home_banner', HomeBannerController::class);
        Route::get('home_banner/{id}/edit', [HomeBannerController::class, 'edit']);
        Route::get('home_banner/{id}/delete', [HomeBannerController::class, 'destroy']);

        //Add Product
        Route::resource('add_product', AddProductController::class);
        Route::get('add_product/{id}/edit', [AddProductController::class, 'edit']);
        Route::get('add_product/{id}/delete', [AddProductController::class, 'destroy']);


        //product Review
        Route::resource('product_review', ProductReviewController::class);
<<<<<<< HEAD
=======

        //order and coupons
        Route::resource('order_coupon', OrderCouponController::class);
>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
    });
});










/*------------------------------------------
--------------------------------------------
All Vendor Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' => 'vendor'], function () {
    Route::get('/login', [VendorAuthController::class, 'getLogin'])->name('vendorLogin');
    Route::post('/login', [VendorAuthController::class, 'postLogin'])->name('vendorLoginPost');

    Route::group(['middleware' => 'vendorauth'], function () {
        Route::get('/', function () {
            return view('vendorHome');
        })->name('vendorDashboard');
    });
});
