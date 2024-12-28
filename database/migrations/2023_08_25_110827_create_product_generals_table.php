<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_generals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sub_sub_category_id')->unsigned()->index()->nullable();
            $table->foreign('sub_sub_category_id')->references('id')->on('sub_sub_category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name')->nullable();
            $table->string('sku_code')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('product_regular_price')->nullable();
            $table->string('product_Offer_price')->nullable();
            $table->string('sort_order')->nullable();
            $table->enum('product_out_of_stock', ['Yes', 'No'])->default('No')->nullable();
            $table->string('min_product_quantity')->nullable();
            $table->string('label')->nullable();
            $table->string('label_text')->nullable();
            $table->string('product_long_description')->nullable();
            $table->string('product_information_show_on_product_page')->nullable();

            $table->string('product_left')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('sub_sub_category')->nullable();
            $table->string('show_in_new_arrival')->nullable();
            $table->string('show_in_tranding_offers')->nullable();
            $table->string('show_in_best_seller')->nullable();
            $table->string('show_in_corporate_gifts')->nullable();
            $table->string('show_in_personalised_gifts')->nullable();
            $table->string('show_in_struction_box')->nullable();
            $table->string('show_in_more_gifts')->nullable();

            $table->string('alt_tag')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('image')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->enum('product_status', ['Show', 'Hide'])->default('Hide')->nullable();

            $table->string('show_help_button')->nullable();
            $table->string('product_left_quantity')->nullable();
            $table->string('gst_on_product')->nullable();
            $table->enum('select_product_join_status', ['Show', 'Hide'])->default('Hide')->nullable();
            $table->string('select_addone_product_with_join')->nullable();
            $table->enum('shipping_caledner_status', ['Show', 'Hide'])->default('Hide')->nullable();
            $table->string('select_shipping_method')->nullable();
            $table->string('regional_shipping_charges')->nullable();
            $table->string('national_shipping_charges')->nullable();
            $table->string('local_shipping_charges')->nullable();
            $table->string('regional_shipping_message')->nullable();
            $table->string('national_shipping_message')->nullable();
            $table->string('local_shipping_message')->nullable();

            $table->string('shipping_pincode_addon')->nullable();
            $table->string('addon_pincode_list')->nullable();
            $table->enum('product_cancel_status', ['Yes', 'No'])->default('No')->nullable();
            $table->string('select_cancel_type')->nullable();
            $table->string('type_day_hour')->nullable();
            $table->enum('product_cod_status', ['Yes', 'No'])->default('No')->nullable();

            $table->string('bulk_quantity')->nullable();
            $table->string('bulk_price')->nullable();
            $table->string('bulk_message')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_generals');
    }
};
