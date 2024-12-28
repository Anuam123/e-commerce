<?php

namespace App\Http\Controllers\Admin\AddProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGeneral;
use App\Models\Category;
use App\Models\SubSubCategory;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeType;
use App\Models\AttributeItem;
use App\Models\ProductImageItem;
use Illuminate\Support\Facades\Redirect;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductGeneral::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.add_product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::select('*')->get();
        $subsubcategories = SubSubCategory::select('*')->get();
        $productattributetype = ProductAttributeType::select('*')->get();
        $productattributes = ProductAttribute::select('*')->get();

        $scategories = SubSubCategory::select('id')->first();


        //dd($subsubcategories);
        return view('admin.add_product.create', compact('categories', 'subsubcategories', 'productattributes', 'productattributetype', 'scategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $product = new ProductGeneral;
        $product->sub_sub_category_id = $request->input("sub_sub_category_id");
        $product->product_name = $request->input("product_name");
        $product->sku_code = $request->input("sku_code");
        $product->product_quantity = $request->input("product_quantity");
        $product->product_regular_price = $request->input("product_regular_price");
        $product->product_Offer_price = $request->input("product_Offer_price");
        $product->sort_order = $request->input("sort_order");
        $product->product_out_of_stock = $request->input("product_out_of_stock");
        $product->min_product_quantity = $request->input("min_product_quantity");
        $product->label = $request->input("label");
        $product->label_text = $request->input("label_text");
        $product->product_long_description = $request->input("product_long_description");
        $product->product_information_show_on_product_page = $request->input("product_information_show_on_product_page");

        $categoryInput = $request->input('category', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->category = implode(',', $categoryInput);
        }

        $product->sub_category = $request->input("sub_category");


        $categoryInput = $request->input('sub_sub_category', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->sub_sub_category = implode(',', $categoryInput);
        }

        $product->show_in_new_arrival = $request->input("show_in_new_arrival");
        $product->show_in_tranding_offers = $request->input("show_in_tranding_offers");
        $product->show_in_best_seller = $request->input("show_in_best_seller");
        $product->show_in_corporate_gifts = $request->input("show_in_corporate_gifts");
        $product->show_in_personalised_gifts = $request->input("show_in_personalised_gifts");
        $product->show_in_struction_box = $request->input("show_in_struction_box");
        $product->show_in_more_gifts = $request->input("show_in_more_gifts");

        $product->alt_tag = $request->input("alt_tag");

        if ($request->hasFile('thumbnail_image')) {
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $path = public_path('thumbnail_image');

            // Delete the old image if needed
            if ($product->thumbnail_image) {
                $oldImagePath = $path . '/' . $product->thumbnail_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $thumbnail_image->move($path, $filename);
            $product->thumbnail_image = $filename;
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('product_image');

            // Delete the old image if needed
            if ($product->image) {
                $oldImagePath = $path . '/' . $product->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image->move($path, $filename);
            $product->image = $filename;
        }

        $product->meta_title = $request->input("meta_title");
        $product->meta_description = $request->input("meta_description");
        $product->product_status = $request->input("product_status");
        $product->show_help_button = $request->input("show_help_button");
        $product->product_left_quantity = $request->input("product_left_quantity");
        $product->product_left = $request->input("product_left");
        $product->gst_on_product = $request->input("gst_on_product");
        $product->select_product_join_status = $request->input("select_product_join_status");
        $product->select_addone_product_with_join = $request->input("select_addone_product_with_join");
        $product->shipping_caledner_status = $request->input("shipping_caledner_status");

        $categoryInput = $request->input('select_shipping_method', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->select_shipping_method = implode(',', $categoryInput);
        }


        $product->regional_shipping_charges = $request->input("regional_shipping_charges");
        $product->national_shipping_charges = $request->input("national_shipping_charges");
        $product->local_shipping_charges = $request->input("local_shipping_charges");
        $product->regional_shipping_message = $request->input("regional_shipping_message");
        $product->national_shipping_message = $request->input("national_shipping_message");
        $product->local_shipping_message = $request->input("local_shipping_message");
        $product->shipping_pincode_addon = $request->input("shipping_pincode_addon");
        $product->addon_pincode_list = $request->input("addon_pincode_list");
        $product->product_cancel_status = $request->input("product_cancel_status");
        $product->select_cancel_type = $request->input("select_cancel_type");
        $product->type_day_hour = $request->input("type_day_hour");
        $product->product_cod_status = $request->input("product_cod_status");
        $product->bulk_quantity = $request->input("bulk_quantity");
        $product->bulk_price = $request->input("bulk_price");
        $product->bulk_message = $request->input("bulk_message");
        $product->save();



        $attributes = $request->input('attributes');

        if (is_array($attributes) && !empty($attributes)) {
            foreach ($attributes as $attribute) {
                $attributeItem = new AttributeItem;
                $attributeItem->product_generals_id = $product->id;
                $attributeItem->attribute = $attribute;
                $attributeItem->save();
            }
        }



        if ($request->hasFile('product_gallery_pic')) {
            foreach ($request->file('product_gallery_pic') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Specify the directory where you want to store the images
                $directory = public_path('product_gallery_pic'); // Change this path to your desired directory

                // Create the directory if it doesn't exist
                if (!file_exists($directory)) {
                    mkdir($directory, 0755, true);
                }

                // Move the uploaded image to the specified directory
                $image->move($directory, $imageName);

                // Create a new ProductImageItem instance
                $productImageItem = new ProductImageItem;
                $productImageItem->product_generals_id = $product->id;
                $productImageItem->product_gallery_pic = $imageName;
                $productImageItem->save();
            }
        }


        return redirect()->route('add_product.index')->with('success', 'Product created successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGeneral $product)
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
        $product = ProductGeneral::find($id);

        $productgallery = ProductImageItem::where('product_generals_id', $product->id)->get();

        $categories = Category::select('*')->get();
        $subsubcategories = SubSubCategory::select('*')->get();
        $productattributetype = ProductAttributeType::select('*')->get();

        $productattributes = ProductAttribute::select('*')->get();
        //dd($productgallery);

        return view('admin.add_product.edit', compact('product', 'categories', 'subsubcategories', 'productattributetype', 'productattributes', 'productgallery'));
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
        $product = ProductGeneral::find($id);
        $product->sub_sub_category_id = $request->input("sub_sub_category_id");
        $product->product_name = $request->input("product_name");
        $product->sku_code = $request->input("sku_code");
        $product->product_quantity = $request->input("product_quantity");
        $product->product_regular_price = $request->input("product_regular_price");
        $product->product_Offer_price = $request->input("product_Offer_price");
        $product->sort_order = $request->input("sort_order");
        $product->product_out_of_stock = $request->input("product_out_of_stock");
        $product->min_product_quantity = $request->input("min_product_quantity");
        $product->label = $request->input("label");
        $product->label_text = $request->input("label_text");
        $product->product_long_description = $request->input("product_long_description");
        $product->product_information_show_on_product_page = $request->input("product_information_show_on_product_page");

        $categoryInput = $request->input('category', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->category = implode(',', $categoryInput);
        }

        $product->sub_category = $request->input("sub_category");


        $categoryInput = $request->input('sub_sub_category', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->sub_sub_category = implode(',', $categoryInput);
        }


        $product->show_in_new_arrival = $request->input("show_in_new_arrival");
        $product->show_in_tranding_offers = $request->input("show_in_tranding_offers");
        $product->show_in_best_seller = $request->input("show_in_best_seller");
        $product->show_in_corporate_gifts = $request->input("show_in_corporate_gifts");
        $product->show_in_personalised_gifts = $request->input("show_in_personalised_gifts");
        $product->show_in_struction_box = $request->input("show_in_struction_box");
        $product->show_in_more_gifts = $request->input("show_in_more_gifts");

        $product->alt_tag = $request->input("alt_tag");

        if ($request->hasFile('thumbnail_image')) {
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $path = public_path('thumbnail_image');

            // Delete the old image if needed
            if ($product->thumbnail_image) {
                $oldImagePath = $path . '/' . $product->thumbnail_image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $thumbnail_image->move($path, $filename);
            $product->thumbnail_image = $filename;
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('product_image');

            // Delete the old image if needed
            if ($product->image) {
                $oldImagePath = $path . '/' . $product->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image->move($path, $filename);
            $product->image = $filename;
        }

        $product->meta_title = $request->input("meta_title");
        $product->meta_description = $request->input("meta_description");
        $product->product_status = $request->input("product_status");
        $product->show_help_button = $request->input("show_help_button");
        $product->product_left_quantity = $request->input("product_left_quantity");
        $product->product_left = $request->input("product_left");
        $product->gst_on_product = $request->input("gst_on_product");
        $product->select_product_join_status = $request->input("select_product_join_status");
        $product->select_addone_product_with_join = $request->input("select_addone_product_with_join");
        $product->shipping_caledner_status = $request->input("shipping_caledner_status");

        $categoryInput = $request->input('select_shipping_method', []);
        if (!empty($categoryInput) && is_array($categoryInput)) {
            $product->select_shipping_method = implode(',', $categoryInput);
        }


        $product->regional_shipping_charges = $request->input("regional_shipping_charges");
        $product->national_shipping_charges = $request->input("national_shipping_charges");
        $product->local_shipping_charges = $request->input("local_shipping_charges");
        $product->regional_shipping_message = $request->input("regional_shipping_message");
        $product->national_shipping_message = $request->input("national_shipping_message");
        $product->local_shipping_message = $request->input("local_shipping_message");
        $product->shipping_pincode_addon = $request->input("shipping_pincode_addon");
        $product->addon_pincode_list = $request->input("addon_pincode_list");
        $product->product_cancel_status = $request->input("product_cancel_status");
        $product->select_cancel_type = $request->input("select_cancel_type");
        $product->type_day_hour = $request->input("type_day_hour");
        $product->product_cod_status = $request->input("product_cod_status");
        $product->bulk_quantity = $request->input("bulk_quantity");
        $product->bulk_price = $request->input("bulk_price");
        $product->bulk_message = $request->input("bulk_message");
        $product->save();



        $attributes = $request->input('attributes');

        if (is_array($attributes) && !empty($attributes)) {
            foreach ($attributes as $attribute) {
                $attributeItem = new AttributeItem;
                $attributeItem->product_generals_id = $product->id;
                $attributeItem->attribute = $attribute;
                $attributeItem->save();
            }
        }



        if ($request->hasFile('product_gallery_pic')) {
            foreach ($request->file('product_gallery_pic') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Specify the directory where you want to store the images
                $directory = public_path('product_gallery_pic'); // Change this path to your desired directory

                // Create the directory if it doesn't exist
                if (!file_exists($directory)) {
                    mkdir($directory, 0755, true);
                }

                // Move the uploaded image to the specified directory
                $image->move($directory, $imageName);

                // Create a new ProductImageItem instance
                $productImageItem = new ProductImageItem;
                $productImageItem->product_generals_id = $product->id;
                $productImageItem->product_gallery_pic = $imageName;
                $productImageItem->save();
            }
        }


        return Redirect::back()->with('success', 'Product Updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = ProductGeneral::find($id);
        $sliders->delete();
        return Redirect::back()->with('success', 'Product Deleted successfully!');
    }
}
