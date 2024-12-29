<?php
namespace App\Helper;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Subsubcategory;
use App\Models\HomeSlider;

class CustomHelper {
  
  public static function categories(){
    $categories = Category::get();
    return $categories;
  }
  public static function sub_category(){
    $subcategories = SubCategory::all();
    return $subcategories;
  }
  public static function sub_sub_category(){
    $subsubcategories = Subsubcategory::all();
    return $subsubcategories;
  }
  public static function home_slider(){
    $homeSlider = HomeSlider::all();
    return $homeSlider;
  }


}

?>
