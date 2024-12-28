@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Add Product')
@section('content')



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Create New Product</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('add_product.index') }}"
            class="btn cyan waves-effect waves-light ">Back <i class="material-icons right">arrow_back</i></a>
    </div>
    <br>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row">
        <d class="col s12">
            <div class="card">
                <div class="w3-bar w3-black">
                    <hr>
                    <div class="row">
                        <div class="col s12 mb-1 mt-1">
                            <button class="w3-bar-item w3-button tablink w3-red btn waves-effect waves-light white"
                                onclick="openCity(event,'General')" style="margin-left: 10px; color:black;">General</button>
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'ProductAttribute')" style="color:black;">Product Attribute</button>
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'Links')" style="color:black;">Links</button>

                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'SeoContent')" style="color:black;">Seo Content</button>
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'StatusGST')" style="color:black;">Status & GST</button>
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'BulkQuantity')" style="color:black;">Bulk Quantity</button>
                        </div>
                        <div class="col s12 mb-1 ml-1">
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'Images')" style="color:black;">Images</button>

                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'ShippingCharges')" style="color:black;">Shipping Charges </button>



                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'CancelCondition')" style=" margin-left: 10px; color:black;">Cancel
                                Condition </button>
                            <button class="w3-bar-item w3-button tablink btn waves-effect waves-light white"
                                onclick="openCity(event,'Setting')" style="color:black;">Setting</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>


            {!! Form::open([
                'route' => 'add_product.store',
                'method' => 'POST',
                'id' => 'settings',
                'enctype' => 'multipart/form-data',
            ]) !!}

            <input type="hidden" value="" name="sub_sub_category_id" id="sub_sub_category_id">

            <div id="General" class="w3-container w3-border city">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <h5 style="back">General</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s6">
                                            <div class="input-field">
                                                <label>Select</label>
                                                <select class="select2 browser-default" id="subsubcategory_select">
                                                    <option value="">-- Select Sub Sub Category --</option>
                                                    @foreach ($subsubcategories as $key => $subsubcategory)
                                                        <option value="{{ $subsubcategory->id }}">
                                                            {{ $subsubcategory->sub_sub_category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <label for="uname0">Product Name*</label>
                                            <input class="validate" id="uname0" name="product_name" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s3">
                                            <label for="cemail0">SKU Code</label>
                                            <input class="validate" id="cemail0" type="text" name="sku_code">
                                        </div>
                                        <div class="input-field col s3">
                                            <label for="password0">Product Quantity</label>
                                            <input class="validate" id="password0" type="number" name="product_quantity">
                                        </div>
                                        <div class="input-field col s3">
                                            <label for="cpassword0">Product Regular Price (MRP)</label>
                                            <input class="validate" id="cpassword0" type="number"
                                                name="product_regular_price">
                                        </div>
                                        <div class="input-field col s3">
                                            <label for="curl0">Product Offer Price</label>
                                            <input class="validate" id="curl0" type="number"
                                                name="product_offer_price">
                                        </div>


                                        <div class="input-field col s4">
                                            <label for="cemail0">Sort Order</label>
                                            <input class="validate" id="cemail0" type="number" name="sort_order">
                                        </div>
                                        <div class="input-field col s4">
                                            <select class="error validate" id="role" name="product_out_of_stock">
                                                <option disabled selected>Product Out Of Stock</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s4">
                                            <label for="cpassword0">Min Product Quantity</label>
                                            <input class="validate" id="cpassword0" type="number"
                                                name="min_product_quantity">
                                        </div>
                                        <div class="input-field col s6">
                                            <select class="error validate" id="role" name="label">
                                                <option disabled selected>Select Label</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <label for="cpassword0">Label Text</label>
                                            <input class="validate" id="cpassword0" type="text" name="label_text">
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="message5" name="product_long_description" class="materialize-textarea"></textarea>
                                            <label for="message" class="">Product Long Description</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="message5" name="product_information_show_on_product_page" class="materialize-textarea"></textarea>
                                            <label for="message" class="">Product Information show on product
                                                page</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ProductAttribute" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Product Attribute</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        @foreach ($productattributetype as $product_type)
                                            <div class="input-field col s4">
                                                <span
                                                    style="color: blue;">{{ $product_type->product_attribute_type }}</span>
                                                <select class="select2 browser-default" name="attributes[]">
                                                    <option disabled selected>-- Select --</option>
                                                    @foreach ($productattributes as $option)
                                                        @if ($option->product_type === $product_type->product_attribute_type)
                                                            <option value="{{ $option->names }}">{{ $option->names }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Links" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Links</h5>
                                <hr><br>
                                <div id="html-view-validations">

                                    <div class="row">
                                        <div class="col s4">
                                            <label>Category</label>
                                            <div class="input-field">
                                                <select class="select2 browser-default" name="category[]"
                                                    multiple="multiple">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($categories as $key => $category)
                                                        <option value="{{ $category->category_name }}">
                                                            {{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <label>Sub Sub Category</label>
                                            <div class="input-field">
                                                <select class="select2 browser-default" name="sub_sub_category[]"
                                                    multiple="multiple">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($subsubcategories as $key => $subsubcategory)
                                                        <option value="{{ $subsubcategory->sub_sub_category_name }}">
                                                            {{ $subsubcategory->sub_sub_category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <label>New Arrival</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role"
                                                    name="show_in_new_arrival">
                                                    <option disabled selected>Select Tranding Offers</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <label>Show In Tranding Offers</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role"
                                                    name="show_in_tranding_offers">
                                                    <option disabled selected>Select Tranding Offers</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s4">
                                            <label>Show In More Gifts</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role" name="show_in_more_gifts"
                                                    name="label">
                                                    <option disabled selected>Show In More Gifts</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <label>Show In Best Seller</label>
                                            <div class="input-field">
                                                <select class="error validate" name="show_in_best_seller" id="role"
                                                    name="label">
                                                    <option disabled selected>Show In Best Seller</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <label>Show In Corporate Gifts</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role" name=""
                                                    name="label">
                                                    <option disabled selected>Show In Corporate Gifts</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6">
                                            <label>Show In Personalised Gifts</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role"
                                                    name="show_in_personalised_gifts">
                                                    <option disabled selected>Show In Personalised Gifts</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s6">
                                            <label>Show Instruction Box</label>
                                            <div class="input-field">
                                                <select class="error validate" id="role"
                                                    name="show_in_struction_box">
                                                    <option disabled selected>Show Instruction Box</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Images" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Images</h5>
                                <hr><br>
                                <div id="html-view-validations">

                                    <!--Default version-->
                                    <div class="row section">
                                        <div class="input-field col s12">
                                            <label for="uname0">Alt Tag*</label>
                                            <input class="validate" id="uname0" name="alt_tag" type="text">
                                        </div>


                                        <div class="col s6">
                                            <p>Thumbnail Image</p>
                                            <input type="file" id="input-file-now" class="dropify"
                                                name="thumbnail_image" data-default-file="" />
                                        </div>

                                        <div class="col s6">
                                            <p>Image</p>
                                            <input type="file" id="input-file-now" class="dropify" name="image"
                                                data-default-file="" />
                                        </div>
                                    </div>


                                    <br>
                                    <a class="btn btn-warning mb-2 addField">Add Fields</a>
                                    <div>
                                        <div class="row firstRow">
                                            {{-- <div class="col-md-6 form-group">
                                                <p>Product Gallery Image</p>
                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" name="product_gallery_pic[]"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="col-md-6 form-group">
                                                <p>Product Gallery Images</p>
                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="product_gallery_pic[]" multiple>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="SeoContent" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Seo Content</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <label>Meta Title</label>
                                            <input class="validate" id="uname0" name="meta_title" type="text">
                                        </div>
                                        <div class="input-field col s6">
                                            <label>Meta Keyword</label>
                                            <input class="validate" id="cemail0" type="text" name="meta_keyword">
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="message5" name="meta_description" class="materialize-textarea"></textarea>
                                            <label for="message" class="">Meta Description</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="StatusGST" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Status & GST</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <select class="error validate" id="role" name="product_left_quantity">
                                                <option disabled selected>Pending and Publish Product Left Quantity</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Publish">Publish</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s4">
                                            <label for="uname0">Product Left Quantity</label>
                                            <input class="validate" id="uname0" name="product_left" type="text">
                                        </div>
                                        <div class="input-field col s4">
                                            <label for="uname0">GST On Product</label>
                                            <input class="validate" id="uname0" name="gst_on_product" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select class="error validate" id="role" name="product_status">
                                                <option disabled selected>Product status</option>
                                                <option value="Hide">Hide</option>
                                                <option value="Show">Show</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <select class="error validate" id="role" name="show_help_button">
                                                <option disabled selected>Show Help Button</option>
                                                <option value="Hide Help Button">Hide Help Button</option>
                                                <option value="Show Help Button">Show Help Button</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="BulkQuantity" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Bulk Quantity</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <div class="input-field col s12">
                                                <label for="uname0">Quantity</label>
                                                <input class="validate" id="uname0" name="bulk_quantity"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <div class="input-field col s12">
                                                <label for="uname0">Price</label>
                                                <input class="validate" id="uname0" name="bulk_price" type="text">
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="message5" name="bulk_message" class="materialize-textarea"></textarea>
                                            <label for="message" class="">Message</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ShippingCharges" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Shipping Charges</h5>
                                <hr><br>
                                <div id="html-view-validations">

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select class="error validate" id="role"
                                                name="shipping_caledner_status">
                                                <option disabled selected>Shipping Caledner status</option>
                                                <option value="Hide">Hide</option>
                                                <option value="Show">Show</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s12">
                                            <option>Select Shipping Method</option>
                                            <select class="select2 browser-default" multiple="multiple"
                                                name="select_shipping_method[]">
                                                <option value="Next Day Delivery">Next Day Delivery</option>
                                                <option value="Mid-Night Delivery">Mid-Night Delivery</option>
                                                <option value="Fixed time Delivery">Fixed time Delivery</option>
                                                <option value="Standard Delivery">Standard Delivery</option>
                                            </select>
                                        </div>

                                        <div class="input-field col s4">
                                            <label for="cemail0">Regional Shipping charges</label>
                                            <input class="validate" id="cemail0" type="text"
                                                name="regional_shipping_charges">
                                        </div>
                                        <div class="input-field col s4">
                                            <label for="cpassword0">National Shipping Charges</label>
                                            <input class="validate" id="cpassword0" type="text"
                                                name="national_shipping_charges">
                                        </div>
                                        <div class="input-field col s4">
                                            <label for="curl0">Local Shipping Charges</label>
                                            <input class="validate" id="curl0" type="text"
                                                name="local_shipping_charges">
                                        </div>


                                        <div class="input-field col s4">
                                            <label for="cemail0">Regional Shipping Message</label>
                                            <input class="validate" id="cemail0" type="text"
                                                name="regional_shipping_message">
                                        </div>

                                        <div class="input-field col s4">
                                            <label for="cpassword0">National Shipping Message</label>
                                            <input class="validate" id="cpassword0" type="text"
                                                name="national_shipping_message">
                                        </div>

                                        <div class="input-field col s4">
                                            <label for="cpassword0">Local Shipping Message</label>
                                            <input class="validate" id="cpassword0" type="text"
                                                name="local_shipping_message">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="CancelCondition" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Cancel Condition</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select class="error validate" id="role" name="product_cancel_status">
                                                <option disabled selected>Product Cancel Status</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <div class="input-field col s6">
                                            <select class="error validate" id="role" name="select_cancel_type">
                                                <option disabled selected>Select Cancel Type</option>
                                                <option value="Hour">Hour</option>
                                                <option value="Hour">Hour</option>
                                            </select>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="cemail0">Type Day or hour</label>
                                            <input class="validate" id="cemail0" type="text" name="type_day_hour">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Setting" class="w3-container w3-border city" style="display:none">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <hr>
                                <h5>Cod Status</h5>
                                <hr><br>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select class="error validate" id="role" name="product_cod_status">
                                                <option disabled selected>Product Cod Status</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
    </div>


    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }
    </script>





    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    {{-- <script>
        $(document).ready(function() {
            // Handle select change event
            $('select.select2').on('change', function() {
                const selectedProductType = $(this).data('type');

                // Hide all options initially
                $('select.select2 option').hide();

                // Show options with matching data-type attribute
                $('select.select2[data-type="' + selectedProductType + '"] option').show();

                // Reset the select to the default option
                $(this).val('-- Select --');
            });
        });
    </script> --}}


    <script>
        $(document).ready(function() {

            //FOR ADD ROWS
            $('.addField').click(function() {
                $('.firstRow').parent().append(`
                <div class="row">
                                        <div class="col s6 file-field input-field">
                                            <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="product_gallery_pic[]" multiple>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" readonly>
                                                    </div>
                                        </div>
                                        <div class="col s6 form-group mt-2">
                                            <button type="button" class="mb-6 btn waves-effect waves-light red accent-2 deleteRow">Remove</button>
                                        </div>
                                    </div>
            `);
            });

            //FOR DELETE ROWS
            $(document).on('click', '.deleteRow', function() {
                $(this).parent().parent().remove();
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Attach a change event handler to the select element
            $("#subsubcategory_select").on("change", function() {
                // Get the selected value of the select element
                var selectedValue = $(this).val();

                // Update the value of the upper input field
                $("#sub_sub_category_id").val(selectedValue);
            });
        });
    </script>



    <br><br><br><br><br>
@endsection
