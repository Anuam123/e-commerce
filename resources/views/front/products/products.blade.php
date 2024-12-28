@extends('front.layouts.master')
@section('title', 'products')
@section('content')

    <div style="margin:16px 0 5px">

        <style>
            @media only screen and (max-width: 765px) {
                .modal-desktop-show {
                    display: none
                }

                .modal-mobile-show {
                    display: block
                }

            }
        </style>
        <div class="main_content">
            <section class="shop-main-wrapper">
                <div class="container-fluid">




                    <style>
                        .row .col.s6 {
                            width: 100% !important;
                        }

                        @media only screen and (min-width: 768px) {
                            #hidedesktop {
                                display: none;
                            }
                        }
                    </style>

                    <div class="row" style="width: 100%;margin: 0">
                        <div class="center-align" id="hidedesktop"
                            style="position: absolute;top: 60px;padding: 0;height: 50px; z-index: 3;width: 100%;">
                            <div class="row filter-buttons-row" style="margin-bottom: 0px;height: 100%;">
                                <a class="modal-trigger" href="#sort-modal" style="
  width: 230px;
">
                                    <div id="sort" style="background: #e9ecef;"
                                        class="col s6 filter-buttons hidden-dot">
                                        <img src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/sort-one.png"
                                            style="width: 16px;margin-right: 7px; height: 16px;">
                                        <span>SORT</span>
                                        <img class="circle-dot-sort"
                                            src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/circle-dot.png"
                                            style="display: none;margin-left: 5px;width: 5px;height: 5px;top: -5px;position: relative">
                                    </div>
                                </a>
                                <div class="vertical"></div>
                                <a class="modal-trigger" href="#filter-modal" style="
  width: 181px;
">
                                    <div id="filter" style="background: #e9ecef;"
                                        class="col s6 filter-buttons hidden-dot">
                                        <img src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/filter-one.png"
                                            style="width: 16px;margin-right: 7px; height: 16px;">
                                        <span>FILTER</span>
                                        <img class="circle-dot-filter"
                                            src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/circle-dot.png"
                                            style="display: none;margin-left: 5px;width: 5px;top: -5px;position: relative; height: 5px;">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="sort-modal" class="modal">
                        <div class="modal-header">
                            <div class="row filter-sort-header"
                                style="margin-top: 0;margin-bottom: 0;padding-top: 10px;width: 100%;margin: 0;padding-left: 26px">
                                <div class="col s8" style="padding: 0">
                                    <span style="font-size: 17px">SORT BY</span>
                                </div>
                                <div class="col s4 right-align clear-filter-sort" style="padding-right: 15px">
                                    <a href="/cake/express-delivery?sort=&showMain=&minPrice=&maxPrice=&tc=213"
                                        style="color: #812990;font-size: 15px">Clear</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-content" style="padding-top: 0;padding-bottom: 7px">
                            <div class="sort-category" id="sort-category-id_1" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=popular&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/popularity-ten-min.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Popularity</span>
                                </a>
                            </div>
                            <div class="sort-category" id="sort-category-id_2" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=priceLowHigh&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/price-high-ten-min.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Price - Low To High</span>
                                </a>
                            </div>
                            <div class="sort-category" id="sort-category-id_3" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=priceHighLow&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/price-low-ten-min.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Price - High To Low</span>
                                </a>
                            </div>
                            <div class="sort-category" id="sort-category-id_4" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=bestseller&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/bestseller-ten-min.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Best Seller</span>
                                </a>
                            </div>
                            <div class="sort-category" id="sort-category-id_5" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=premium&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/03/13/mobile/mobile-new-catg-page/premium-ten-min.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Premium</span>
                                </a>
                            </div>
                            <div class="sort-category" id="sort-category-id_6" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=trending&showMain=&minPrice=&maxPrice=&tc=213">
                                    <img class="responsive-img lazyload"
                                        src="https://assets.winni.in/groot/2023/04/04/mobile/trending-img.png"
                                        style="width: 16px;margin-right: 11px; height: 16px;" />
                                    <span style="font-size: 16px;color: #333">Trending</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="filter-modal" class="modal">
                        <div class="modal-header" style="height: 50px">
                            <div class="row" style="margin: 0;">
                                <div class="col s12">
                                    <div class="row filter-sort-header"
                                        style="margin-top: 0;margin-bottom: 0;padding-top: 10px;width: 100%;margin: 0;padding-left: 15px">
                                        <div class="col s8" style="padding: 0">
                                            <span style="font-size: 17px">FILTER BY PRICE</span>
                                        </div>
                                        <div class="col s4 right-align clear-filter-price" style="padding-right: 8px">
                                            <a href="/cake/express-delivery?sort="
                                                style="color: #812990;font-size: 15px">Clear</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-content" style="padding-top: 0;padding-bottom: 7px;margin-top: 20px">
                            <div class="price-range-category" id="filter-category-id_1" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=&showMain=true&maxPrice=499">
                                    <span style="font-size: 16px;color: #333">
                                        <span class="moneySymbol">Rs.</span>
                                        &nbsp;<span data-inr="499" class="moneyCal">499</span>
                                        and Below
                                    </span>
                                </a>
                            </div>
                            <div class="price-range-category" id="filter-category-id_2" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=&showMain=true&minPrice=500&maxPrice=999">
                                    <span style="font-size: 16px;color: #333">
                                        <span class="moneySymbol">Rs.</span>
                                        &nbsp;<span data-inr="500" class="moneyCal">500</span>
                                        &nbsp;-&nbsp;<span data-inr="999" class="moneyCal">999</span>
                                    </span>
                                </a>
                            </div>
                            <div class="price-range-category" id="filter-category-id_3" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=&showMain=true&minPrice=1000&maxPrice=1499">
                                    <span style="font-size: 16px;color: #333">
                                        <span class="moneySymbol">Rs.</span>
                                        &nbsp;<span data-inr="1000" class="moneyCal">1000</span>
                                        &nbsp;-&nbsp;<span data-inr="1499" class="moneyCal">1499</span>
                                    </span>
                                </a>
                            </div>
                            <div class="price-range-category" id="filter-category-id_4" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=&showMain=true&minPrice=1500&maxPrice=2499">
                                    <span style="font-size: 16px;color: #333">
                                        <span class="moneySymbol">Rs.</span>
                                        &nbsp;<span data-inr="1500" class="moneyCal">1500</span>
                                        &nbsp;-&nbsp;<span data-inr="2499" class="moneyCal">2499</span>
                                    </span>
                                </a>
                            </div>
                            <div class="price-range-category" id="filter-category-id_5" style="margin: 15px 0;">
                                <a href="/cake/express-delivery?sort=&showMain=true&minPrice=2500">
                                    <span style="font-size: 16px;color: #333">
                                        <span class="moneySymbol">Rs.</span>
                                        &nbsp;<span data-inr="2500" class="moneyCal">2500</span>
                                        and Above
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>




                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Initialize the modal components
                            var modals = document.querySelectorAll('.modal');
                            M.Modal.init(modals);

                            // Add click event listeners to trigger the modals
                            var sortButton = document.getElementById('sort');
                            var filterButton = document.getElementById('filter');

                            sortButton.addEventListener('click', function() {
                                var sortModal = document.getElementById('sort-modal');
                                var instance = M.Modal.getInstance(sortModal);
                                instance.open();
                            });

                            filterButton.addEventListener('click', function() {
                                var filterModal = document.getElementById('filter-modal');
                                var instance = M.Modal.getInstance(filterModal);
                                instance.open();
                            });
                        });
                    </script>
                </div>
                <div class="container-fluid" id="maindiv">
                    <div class="row">
                        <!-- shop left sidebar part -->






                        <div class="col-md-3 col-sm-3 mobile-hides shop-gap-remove"
                            style="padding: 12px;border: 1px solid #0000003b;">
                            <a href="#"
                                style="display: flex; align-items: center; justify-content: space-between; text-align: left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;padding-bottom: 20px;">
                                <span>Price</span>
                                <button class="plus-icon clear-all-button"
                                    style="
  background: aliceblue;
  color: #050360;
">Clear All</button>
                            </a>
                            <div class="sidebar force-overflow" id="style-2">

                                <div class="price-range-block">
                                    <div id="slider-range"
                                        class="price-filter-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        name="rangeInput">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 100%;"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 100%;"></span>
                                    </div>
                                    <div class="livecount" style="text-align: center;font-size: 19px;font-weight: 700;">
                                        <select name="min" id="min_price" class="price-range-field"
                                            onchange="setMinValue()">
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <span>to</span>
                                        <select name="max" id="max_price" class="price-range-field">
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <script>
                                        function setMinValue() {
                                            var minValue = document.getElementById("min_price").value;
                                            document.getElementById("max_price").value = minValue;
                                        }
                                    </script>


                                </div>
                                <!--<div class="text-center">-->
                                <!--  <button class="btn filter-btn" type="submit">Search</button>-->
                                <!--</div>-->
                                <br>
                                <!--                        <div class="shop-accordian-title">-->
                                <!--	<h3>Color</h3>-->
                                <!--</div>-->
                                <div id="mains">
                                    <div class="container m-0 p-0">
                                        <div class="accordion" id="faqs">
                                            <!-- filter-one -->
                                            <div class="card">
                                                <div class="card-header" id="faqhead1"
                                                    style="border-bottom: 1px solid #E2E2E2;">
                                                    <a href="#" class="btn btn-header-link shop-accordian-title"
                                                        data-toggle="collapse" data-target="#faq1" aria-expanded="true"
                                                        aria-controls="faq1"
                                                        style="text-align:left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;">
                                                        Color <span class="plus-icon">&#x2b;</span>
                                                    </a>

                                                </div>

                                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1"
                                                    data-parent="#faqs" style="">
                                                    <div class="card-body custom-shop-body">
                                                        <ul class="list_brand">
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="red" value="">
                                                                    <label class="form-check-label"
                                                                        for="red"><span>Red</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="green" value="">
                                                                    <label class="form-check-label"
                                                                        for="green"><span>Green</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="yellow" value="">
                                                                    <label class="form-check-label"
                                                                        for="yellow"><span>Yellow</span></label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="accordion" id="faqs1">
                                            <!-- filter-one -->
                                            <div class="card">
                                                <div class="card-header" id="faqhead1"
                                                    style="border-bottom: 1px solid #E2E2E2;">
                                                    <a href="#"
                                                        class="btn btn-header-link shop-accordian-title collapsed"
                                                        data-toggle="collapse" data-target="#faq1" aria-expanded="false"
                                                        aria-controls="faq1"
                                                        style="display: flex; align-items: center; justify-content: space-between; text-align: left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;">
                                                        <span>Occasions</span>
                                                        <span class="plus-icon">+</span>
                                                    </a>


                                                </div>

                                                <div id="faq1" class="collapse " aria-labelledby="faqhead1"
                                                    data-parent="#faqs1" style="">
                                                    <div class="card-body custom-shop-body">
                                                        <ul class="list_brand">
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="red" value="">
                                                                    <label class="form-check-label"
                                                                        for="red"><span>Red</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="green" value="">
                                                                    <label class="form-check-label"
                                                                        for="green"><span>Green</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="yellow" value="">
                                                                    <label class="form-check-label"
                                                                        for="yellow"><span>Yellow</span></label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="accordion" id="faqs2">
                                            <!-- filter-one -->
                                            <div class="card">
                                                <div class="card-header" id="faqhead1"
                                                    style="border-bottom: 1px solid #E2E2E2;">
                                                    <a href="#"
                                                        class="btn btn-header-link shop-accordian-title collapsed"
                                                        data-toggle="collapse" data-target="#faq1" aria-expanded="false"
                                                        aria-controls="faq1"
                                                        style="display: flex; align-items: center; justify-content: space-between; text-align: left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;">
                                                        <span>Size</span>
                                                        <span class="plus-icon">+</span>
                                                    </a>


                                                </div>

                                                <div id="faq1" class="collapse" aria-labelledby="faqhead1"
                                                    data-parent="#faqs2" style="">
                                                    <div class="card-body custom-shop-body">
                                                        <ul class="list_brand">
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="red" value="">
                                                                    <label class="form-check-label"
                                                                        for="red"><span>Red</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="green" value="">
                                                                    <label class="form-check-label"
                                                                        for="green"><span>Green</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="yellow" value="">
                                                                    <label class="form-check-label"
                                                                        for="yellow"><span>Yellow</span></label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="accordion" id="faqs3">
                                            <!-- filter-one -->
                                            <div class="card">
                                                <div class="card-header" id="faqhead1"
                                                    style="border-bottom: 1px solid #E2E2E2;">
                                                    <a href="#"
                                                        class="btn btn-header-link shop-accordian-title collapsed"
                                                        data-toggle="collapse" data-target="#faq1" aria-expanded="false"
                                                        aria-controls="faq1"
                                                        style="display: flex; align-items: center; justify-content: space-between; text-align: left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;">
                                                        <span>Shape</span>
                                                        <span class="plus-icon">+</span>
                                                    </a>


                                                </div>

                                                <div id="faq1" class="collapse " aria-labelledby="faqhead1"
                                                    data-parent="#faqs3" style="">
                                                    <div class="card-body custom-shop-body">
                                                        <ul class="list_brand">
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="red" value="">
                                                                    <label class="form-check-label"
                                                                        for="red"><span>Red</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="green" value="">
                                                                    <label class="form-check-label"
                                                                        for="green"><span>Green</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="yellow" value="">
                                                                    <label class="form-check-label"
                                                                        for="yellow"><span>Yellow</span></label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="accordion" id="faqs4">
                                            <!-- filter-one -->
                                            <div class="card">
                                                <div class="card-header" id="faqhead1"
                                                    style="border-bottom: 1px solid #E2E2E2;">
                                                    <a href="#"
                                                        class="btn btn-header-link shop-accordian-title collapsed"
                                                        data-toggle="collapse" data-target="#faq1" aria-expanded="false"
                                                        aria-controls="faq1"
                                                        style="display: flex; align-items: center; justify-content: space-between; text-align: left; font-size: 18px; font-weight: 600; color: #000; line-height: 25px;">
                                                        <span>Fabric</span>
                                                        <span class="plus-icon">+</span>
                                                    </a>


                                                </div>

                                                <div id="faq1" class="collapse" aria-labelledby="faqhead1"
                                                    data-parent="#faqs4" style="">
                                                    <div class="card-body custom-shop-body">
                                                        <ul class="list_brand">
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="red" value="">
                                                                    <label class="form-check-label"
                                                                        for="red"><span>Red</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="green" value="">
                                                                    <label class="form-check-label"
                                                                        for="green"><span>Green</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custome-checkbox">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="yellow" value="">
                                                                    <label class="form-check-label"
                                                                        for="yellow"><span>Yellow</span></label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- shop right part -->
                        <div class="col-md-9 col-sm-9">
                            <div class="shop-product-wrapper">
                                <div class="shop-top-bar">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="top-bar-right mobile-hide">
                                                <strong>All Personalized Gifts</strong>
                                                <div class="price_sidebar_two">
                                                    <span style="color:blue;">Sort By :</span>
                                                    <ul class="custom-flit-1">
                                                        <li> <a class="price-range-a" href="javascript:void(0)">Price (Low
                                                                to High)*</a>
                                                        </li>
                                                        <li> <a class="price-range-a" href="javascript:void(0)">Price
                                                                (High to Low)*</a>
                                                        </li>
                                                        <li> <a class="price-range-a" href="javascript:void(0)">Tranding
                                                                Offer*</a>
                                                        </li>
                                                        <li> <a class="price-range-a" href="javascript:void(0)">Best
                                                                Seller*</a>
                                                        </li>
                                                        <li> <a class="price-range-a"
                                                                href="javascript:void(0)">Personalized Gifts*</a>
                                                        </li>
                                                        <li> <a class="price-range-a"
                                                                href="javascript:void(0)">Newest*</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        @media (max-width: 767px) {}
                                    </style>

                                </div>
                                <div class="shop-product-wrap-grid">
                                    <div class="row">
                                        @foreach ($product as $key => $product)
                                            @if ($product->sub_sub_category_id == request()->segment(2))
                                                <div class="col-sm-3 col-xs-6 shop-gap-remove mb-3">
                                                    <div class="produts-category-main-box">
                                                        <div class="product-cat-image">
                                                            <a href="#">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('product_image/' . $product->image) }}"
                                                                    alt="product_img1" style="height:250px; width:250px;">
                                                            </a>
                                                        </div>
                                                        <div class="product-cat-name">
                                                            <div class="custom">
                                                            </div>
                                                            <div class="button-group"> <a href="javascript:void(0)"
                                                                    class="add_to_wishlist_home"><i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="custom">
                                                                <a href="#"
                                                                    class="Customizavle-label">{{$product->product_name}}</a>
                                                            </div>
                                                            <div class="product_info">
                                                                <h6 class="product_title"><a href="{{ url('/singleproduct', $product->id) }}">{{$product->product_name}}</a></h6>
                                                                <div class="product_price">
                                                                    <span class="price">₹1099</span>
                                                                    <del>₹1899</del>
                                                                    <div class="on_sale"> <span>35% Off</span>
                                                                    </div>
                                                                </div>
                                                                <span class="product-card_rating-sec__34VZH">4.4<i
                                                                        class="fa fa-star"
                                                                        aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;
                                                                <div class="on_sale" style="color:#bfc1c3"> <span>18
                                                                        Reviews</span> </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END MAIN CONTENT -->










        <!-- desktop -->
        <section class="feature-section" id="mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="info-box-wrapper">
                            <div class="box-icon-wrapper">
                                <div class="info-box-icon">
                                    <img src="images/free-50x50.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Free Shipping.</h4>
                                <div class="info-box-inner">
                                    <p>No one rejects, dislikes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box-wrapper">
                            <div class="box-icon-wrapper">
                                <div class="info-box-icon">
                                    <img src="images/24x7-50x50.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">24/7 Support.</h4>
                                <div class="info-box-inner">
                                    <p>24x7 support available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box-wrapper">
                            <div class="box-icon-wrapper">
                                <div class="info-box-icon">
                                    <img src="images/pay-1-50x50.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Online Payment.</h4>
                                <div class="info-box-inner">
                                    <p>100% secure payment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box-wrapper">
                            <div class="box-icon-wrapper">
                                <div class="info-box-icon">
                                    <img src="images/fast-50x50.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="info-box-content">
                                <h4 class="info-box-title">Fast Delivery.</h4>
                                <div class="info-box-inner">
                                    <p>All product fast delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mobile -->
        <section class="mobile-feature-section" id="desktop">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="feature-inner-mob">
                            <div class="mob-info-boxs">
                                <div class="mob-info-img">
                                    <img src="images/free-50x50.png" alt="" class="img-fluid">
                                </div>
                                <div class="mob-info-text">
                                    <h6>Free Shipping.</h6>
                                    <p>Free shipping available now.</p>
                                </div>
                            </div>
                            <div class="mob-info-boxs">
                                <div class="mob-info-img">
                                    <img src="images/24x7-50x50.png" alt="" class="img-fluid">
                                </div>
                                <div class="mob-info-text">
                                    <h6>24/7 Support.</h6>
                                    <p>24x7 support available.</p>
                                </div>
                            </div>
                            <div class="mob-info-boxs">
                                <div class="mob-info-img">
                                    <img src="images/pay-1-50x50.png" alt="" class="img-fluid">
                                </div>
                                <div class="mob-info-text">
                                    <h6>Online Payment.</h6>
                                    <p>100% secure payment.</p>
                                </div>
                            </div>
                            <div class="mob-info-boxs">
                                <div class="mob-info-img">
                                    <img src="images/fast-50x50.png" alt="" class="img-fluid">
                                </div>
                                <div class="mob-info-text">
                                    <h6>Fast Delivery.</h6>
                                    <p>All product fast delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DESKTOP START FOOTER -->
        <footer class="footer-bg" id="mobile">
            <div class="footer_top small_pt pb_10">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3" style="border-right: 1px solid #fff;">
                            <div class="widget">
                                <h6 class="widget_title">Contact Info</h6>
                                <ul class="contact_info">
                                    <li>
                                        <p class="business">
                                            <img src="images/desktop-footer-business-icon.png"
                                                class="destop-footer-business" alt="" width="20">
                                            <b>Printmont Corporation</b>
                                        </p>
                                    </li>
                                    <li> <i class="fa fa-map-marker"></i>
                                        <p>3398, Bagichi Acchi ji, Bara Hindu Rao, Near Azad Market, Delhi - 110006</p>
                                    </li>
                                    <li> <i class="fa fa-envelope"></i>
                                        <p><a href="maito: info@printmont.com" class="mail-to">info@printmont.com</a>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>
                                            <a href="tel:+91-9811003511" class="mail-to">+91-9811003511</a>/<a
                                                href="tel:+91-9818532463" class="mail-to">+91-9818532463</a>
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" style="border-right: 1px solid #fff;">
                            <div class="widget">
                                <h6 class="widget_title">Quick Links</h6>
                                <ul class="widget_links">
                                    <li><a href="#">Login/ Register</a>
                                    </li>
                                    <li><a href="#">My Account</a>
                                    </li>
                                    <li><a href="#">My Wallet</a>
                                    </li>

                                    <li><a href="#">Wishlist</a>
                                    </li>
                                    <li><a href="#">Blog</a>
                                    </li>
                                    <li><a href="#"><button class="subscribr-submit">Bulk Order</button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" style="border-right: 1px solid #fff;">
                            <div class="widget">
                                <h6 class="widget_title">Help</h6>
                                <ul class="widget_links">
                                    <li><a href="orders-faq.html">Orders FAQ</a>
                                    </li>
                                    <li><a href="design-faq.html">Artwork FAQ</a>
                                    </li>
                                    <li><a href="shipping-faq.html">Shipping FAQ</a>
                                    </li>
                                    <li><a href="payment-faq.html">Payment FAQ</a>
                                    </li>
                                    <li><a href="#">Shipping Policy</a>
                                    </li>
                                    <li><a href="return-refund-policy.html">Returned & Refund Policy</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="widget">
                                <h6 class="widget_title">Subscribe</h6>
                                <form action="#" method="post" id="#" class="subscribe">
                                    <div class="subscribe-main">
                                        <input name="email" id="email" class="subscribe-field" type="email"
                                            placeholder="Email Address" required maxlength="50"> <span class="help-block"
                                            id=""></span>
                                        <input type="submit" name="submit" class="subscribr-submit"
                                            value="Subscribe!" />
                                    </div>
                                </form>
                            </div>
                            <div class="widget">
                                <h6 class="widget_title_2">Follow us on</h6>
                                <ul class="social_icons text-center text-lg-center">
                                    <li><a href="#" class="sc_facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="sc_twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="sc_google"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="sc_instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="sc_twitter"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                                <ul class="footer_payment text-center text-lg-center">
                                    <li>
                                        <a href="#">
                                            <img src="images/download.png" alt="" class="mb-2">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_footer border-top-tran">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <p class="mb-lg-0 text-center text-lg-left text-white">© Copyright 2019 - 2023 Printmont.com .
                                All
                                Rights Reserved .</p>
                        </div>
                        <div class="col-lg-4 text-center">
                            <p class="text-center" style="color:#fff;font-size: 18px;">100 % safe and Secure payments.</p>
                            <a href="#">
                                <img src="images/payment-pic.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <ul class="footer_payment text-center text-lg-right">
                                <li><a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li><a href="terms-conditions.html">Terms Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- DESKTOP END FOOTER -->
        <!------------mobile footer------------>
        <footer class="mobile-footer text-center" id="desktop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <!-- accordion -->

                        <div class="mobile-footer-upper-part">
                            <!--<ul>-->
                            <!--	<li><a href="#">About Us</a>-->
                            <!--	</li>-->
                            <!--	<li><a href="#">Terms &amp; Conditions</a>-->
                            <!--	</li>-->
                            <!--	<li><a href="#">Privacy Policy</a>-->
                            <!--	</li>-->
                            <!--</ul>-->
                            <ul>

                                <li><a href="#">Contact Us</a>
                                </li>
                                <li><a href="#">Quick Links</a>
                                </li>
                                <li><a href="help.html">Help Now</a>
                                </li>
                            </ul>
                        </div>
                        <div class="company-identity mt-2">
                            <ul class="mobile-contact_info">
                                <li>
                                    <img src="images/business-icon.png" class="mob-com-i" alt>
                                    <p class="mob-com"><b>Printmont Corporation</b>
                                    </p>
                                </li>
                                <li> <i class="fa fa-phone"></i>
                                    <p>Help Centre. +91-9818532463</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-middle-part">
                            <div>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z">
                                    </path>
                                </svg>
                            </div>
                            <p class="mobile-footer_safe-secure">100% Safe and secure payments.</p>
                            <p class="mobile-footer_socialSpan">Follow us on</p>
                        </div>
                        <div class="footer-lower-part">
                            <ul class="social_icons text-center text-lg-left">
                                <li><a href="#" class="sc_facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#" class="sc_twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="sc_google"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li><a href="#" class="sc_instagram"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a href="#" class="sc_twitter"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-copy">
                            <p class="text-center">© Copyright 2019 - 2023 Printmont.com . All Rights Reserved .</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>









        <!-- mobile footer bottom menu -->



    </div>



@endsection
