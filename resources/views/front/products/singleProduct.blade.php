@extends('front.layouts.master')
@section('title', 'products')
@section('content')


    <div class="wrapper">
        <!---------------------------------- bread-crumb ---------------------------------->
        <section class="bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-title">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://html.rajeshbookstore.in/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Camera Pen Custom</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------------- //bread-crumb ---------------------------------->
        <!---------------------------------- MAIN CONTENT ----------------------------------------->
        <div class="main_content-2">
            <!-----------------------------------Main-product-Section----------------------->
            <section class="main-products-div-twenty">
                <div class="container-fluid">
                    <div class="product-row">
                        <div class="product-section">
                            <div class="left-section">
                                <div class="motif-woocommerce-product-gallery">

                                    <div class="zoom-feature-image">

                                        <img id="zoom_01" class="motif-main_thumbnail motiflens drift-demo-trigger"
                                            data-zoom="images/pen.png" src="{{ asset('product_image/' . $singleproduct->image) }}" xoriginal="images/pen.png" />
                                        <div class="icon share-icon">
                                            <i class="fa fa-share"></i>
                                        </div>

                                        <!-- Heart icon -->
                                        <div class="icon heart-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="zoom-gallary">
                                        <div id="thumbnail-slider">
                                            <div class="inner">
                                                <ul>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="Orange" />
                                                        </a>
                                                    </li>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="Green" />
                                                        </a>
                                                    </li>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="cRed" />
                                                        </a>
                                                    </li>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="cBlue" />
                                                        </a>
                                                    </li>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="cBlue" />
                                                        </a>
                                                    </li>
                                                    <li class="zoom-li item">
                                                        <a class="thumb" href="images/pen.png">
                                                            <img class="motif-gallery" src="{{ asset('front_assets/images/pen.png')}}"
                                                                xpreview="images/pen.png" title="Voiletc" />
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="right-section">
                                <div class="product-details-des details">
                                    <h3 class="product-name"
                                        style="margin-bottom: 5px;
font-size: 18px;
color: #3d3d3d;
font-weight: 400;
text-overflow: ellipsis;
margin-top: 0;
padding-top: 0;">
                                        Camera Pen Custom</h3>
                                    <div class="price-with-name-desktop_categoryReviewSummary__3O7m2"
                                        itemprop="aggregateRating" itemscope=""
                                        itemtype="https://schema.org/AggregateRating" role="presentation">
                                        <div class="price-with-name-desktop_ratingSec__CsDG5">
                                            <div class="m-plp_product-rnr__1XDWx product-rnr">
                                                <span class="product-card_rating-sec__34VZH">4.7<i
                                                        class="material-icons">star_half</i></span><span
                                                    class="m-plp_product-reviews__3d14Y product-reviews"><span
                                                        itemprop="reviewCount">14</span> Reviews</span>
                                                <div itemprop="bestrating" style="display:none">5</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------------------price------------------>
                                    <div class="price-with-name-desktop_productPrice__1tDCN">
                                        <span class="price-with-name-desktop_priceBlock__3WjBf">
                                            <div class="price-with-name-desktop_priceDiscountBlock__3qCOi"><span
                                                    class="price-with-name-desktop_odometerPrice__1IVn2"><span
                                                        class="price-with-name-desktop_currencySymbol__26YVA">₹</span><span
                                                        id="odometer"
                                                        class="odometer odometer-auto-theme">649</span></span></div>
                                        </span>
                                        <div class="price-with-name-desktop_offers-section__T1yyP" itemprop="offers"
                                            itemscope="">

                                            <div class="price-with-name-desktop_offer-surge-price-wrapper__nUqUD">
                                                <div class="price-with-name-desktop_crossPrice__2BIlA"><span
                                                        class="price-with-name-desktop_oldPrice__2rNHg"><span
                                                            class="curr_inr">₹</span>799</span><span
                                                        class="price-with-name-desktop_offPrice__38ZiW"> (18% OFF)</span>
                                                </div>
                                                <svg class="MuiSvgIcon-root price-with-name-desktop_info-details__Cx-1G price-with-name-desktop_icon__1thbN "
                                                    focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div
                                                class="price-with-name_offerButtonWrapper__3MQS2 price-with-name_offerButtonWrapperDesktop__2dIqP">
                                                <div class="price-with-name_offersAvailableButton__2X3f3"
                                                    role="presentation">
                                                    <span class="price-with-name_offerIcon__38mJb undefined">
                                                        <svg class="MuiSvgIcon-root" focusable="false"
                                                            viewBox="0 0 24 24" aria-hidden="true">
                                                            <path
                                                                d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <span class="price-with-name_offerText__1tMgC">Offers available</span>
                                                    <span class="price-with-name_expandMoreIcon__3Zbh9">
                                                        <svg class="MuiSvgIcon-root" focusable="false"
                                                            viewBox="0 0 24 24" aria-hidden="true">
                                                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gifts-you-may-like_desktopVariantItem__1aNr1">
                                        <div class="gifts-you-may-like_pickUpgrade__13m2Q">Pick an upgrade</div>
                                        <div class="gifts-you-may-like_variantScroll__2SRdI">
                                            <div class="gifts-you-may-like_variantItem__2R_JO gifts-you-may-like_activeVariant__3VKUJ"
                                                role="presentation" data-product-id="COUR223968" data-product-price="599"
                                                data-ga-title="SMALL">
                                                <div class="gifts-you-may-like_variantGiftImage__191Pl"><img
                                                        loading="lazy"
                                                        src="images/7-days-emojis-unisex-white-t-shirt-medium_1.webp"
                                                        alt="7 Days Emojis Unisex White T-Shirt- Small" width="100%"
                                                        height="100%"></div>
                                                <div class="gifts-you-may-like_desktopVariantDetails__15gZk"><span
                                                        class="gifts-you-may-like_variantTitle__q4BBA">Small</span>
                                                    <div class="gifts-you-may-like_variantPrice__1oXDu"><span
                                                            class="gifts-you-may-like_priceSymbol__8ROc1">₹&nbsp;</span>599
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gifts-you-may-like_variantItem__2R_JO gifts-you-may-like_variant__Y4aoY"
                                                role="presentation" data-product-id="COUR223969" data-product-price="599"
                                                data-ga-title="MEDIUM">
                                                <div class="gifts-you-may-like_variantGiftImage__191Pl"><img
                                                        loading="lazy"
                                                        src="images/7-days-emojis-unisex-white-t-shirt-medium_1.webp"
                                                        alt="7 Days Emojis Unisex White T-Shirt- Medium" width="100%"
                                                        height="100%"></div>
                                                <div class="gifts-you-may-like_desktopVariantDetails__15gZk"><span
                                                        class="gifts-you-may-like_variantTitle__q4BBA">Medium</span>
                                                    <div class="gifts-you-may-like_variantPrice__1oXDu"><span
                                                            class="gifts-you-may-like_priceSymbol__8ROc1">₹&nbsp;</span>599
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gifts-you-may-like_desktopVariantItem__1aNr1">
                                        <div class="gifts-you-may-like_pickUpgrade__13m2Q" data-toggle="modal"
                                            data-target="#sizeModal" style="cursor: pointer; color: blue;">Select Multiple
                                            Sizes</div>
                                    </div>

                                    <div class="delivery-textbox_pdpFlexContainer__Z0Or_" id="pdp-user-options">
                                        <div
                                            class="delivery-textbox_deliveryTextBox__uk2bc delivery-textbox_deliveryTextBoxPadding__1HE6S">
                                            <div id="pincode-input" class="delivery-textbox_localityPicker__1BbuD">
                                                <div class="MuiGrid-root">

                                                    <div class="MuiGrid-root custom-delivery-textbox_deliveryBoxContainer__1666V"
                                                        id="selectoptions">
                                                        <select
                                                            class="custom-delivery-textbox_deliveryInputField__10gjM custom-delivery-textbox_selectInputField__e840f">
                                                            <option value="110086, New Delhi, Delhi">
                                                                <div>
                                                                    <img src="images/pen.jpg" alt="Image of New Delhi">
                                                                    <span>New Delhi, Delhi</span>
                                                                </div>
                                                            </option>
                                                            <option value="12345, Mumbai, Maharashtra">
                                                                <div>
                                                                    <img src="images/pen.jpg" alt="Image of Mumbai">
                                                                    <span>Mumbai, Maharashtra</span>
                                                                </div>
                                                            </option>
                                                            <option value="67890, Bangalore, Karnataka">
                                                                <div>
                                                                    <img src="images/pen.jpg" alt="Image of Bangalore">
                                                                    <span>Bangalore, Karnataka</span>
                                                                </div>
                                                            </option>
                                                        </select>

                                                    </div>
                                                    <div
                                                        class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-8 MuiGrid-grid-lg-8">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="modal fade" id="sizeModal" tabindex="-1" role="dialog"
                                        aria-labelledby="sizeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <table style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: left;padding-left: 14px;">Size</th>
                                                                <th style="text-align: left;">Quantity</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="content-multi-qty" style="text-align: center;">
                                                        <table style="">
                                                            <tbody>
                                                                <tr>
                                                                    <td style=""><label for="s"
                                                                            style="margin-right:15px;">S:</label></td>
                                                                    <td><input type="number" id="s"
                                                                            name="s"
                                                                            style="width: 100px;margin-bottom: 0;"
                                                                            value=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style=""><label for="m"
                                                                            style="margin-right:15px;">M:</label></td>
                                                                    <td><input type="number" id="m"
                                                                            name="m"
                                                                            style="width: 100px;margin-bottom: 0;"
                                                                            value=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style=""><label for="l"
                                                                            style="margin-right:15px;">L:</label></td>
                                                                    <td><input type="number" id="l"
                                                                            name="l"
                                                                            style="width: 100px;margin-bottom: 0;"
                                                                            value=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style=""><label for="xl"
                                                                            style="margin-right:15px;">XL:</label></td>
                                                                    <td><input type="number" id="xl"
                                                                            name="xl"
                                                                            style="width: 100px;margin-bottom: 0;"
                                                                            value=""></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top: 0px solid #dee2e6;">

                                                    <button type="button" class="btn btn-primary">Proceed</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="delivery-textbox_pdpFlexContainer__Z0Or_" id="pdp-user-options">
                                        <div
                                            class="delivery-textbox_deliveryTextBox__uk2bc delivery-textbox_deliveryTextBoxPadding__1HE6S">
                                            <div id="pincode-input" class="delivery-textbox_localityPicker__1BbuD">
                                                <div class="MuiGrid-root">
                                                    <svg class="MuiSvgIcon-root custom-delivery-textbox_inputFieldRoomIcon__y9r3l"
                                                        focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path
                                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
                                                        </path>
                                                    </svg>
                                                    <div
                                                        class="MuiGrid-root custom-delivery-textbox_deliveryBoxContainer__1666V">
                                                        <input type="text" id="autocomplete-input"
                                                            value="110086, New Delhi, Delhi"
                                                            class="custom-delivery-textbox_deliveryInputField__10gjM custom-delivery-textbox_readOnlyInputField__3FrWT "
                                                            placeholder="* Enter Pincode, Location or Area"
                                                            title="Click on remove(X) button to change location"
                                                            readonly=""></div>
                                                    <span role="presentation" data-testid="btn">
                                                        <svg class="MuiSvgIcon-root custom-delivery-textbox_inputFieldCloseIcon__dYaai"
                                                            focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                            <path
                                                                d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <div
                                                        class="MuiGrid-root custom-delivery-textbox_deliveryInputMsg__y-zTf">
                                                        <span id="pincode-selected"
                                                            class="custom-delivery-textbox_haspin__28eSM">Pincode:
                                                            110086</span></div>
                                                </div>
                                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-8 MuiGrid-grid-lg-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="delivery-textbox_deliveryTextBox__uk2bc delivery-textbox_deliveryTextBoxPadding__1HE6S"
                                            id="datetimelink">
                                            <div class="selected-shipping_dateTimeShipping__4XjY8" role="presentation">
                                                <span class="selected-shipping_deliveryDateOfMonth__12UR0"
                                                    data-testid="shipping-date">13</span><span
                                                    class="selected-shipping_deliveryMonth__2f2gL">Jul</span><span
                                                    class="selected-shipping_shippingMethod__sQV3C"><span title="Courier"
                                                        class="selected-shipping_long-shipping-details__1K2oV">Courier</span>:&nbsp;<span
                                                        class="selected-shipping_shippingCost__S-zZG"><span
                                                            class="selected-shipping_WebRupee__3lS6w selected-shipping_freeShipping__38fa_">Free</span></span></span>
                                                <div><span class="selected-shipping_deliveryWeekday__fEOhJ">Thu</span><span
                                                        class="selected-shipping_timeSlot__3XmFA">09:00 AM - 09:00
                                                        PM</span></div>
                                                <span class="selected-shipping_dropArrow__3Da9D">
                                                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="delivery-textbox_sameDayDeliveryGifts__rVHIU"><span>Want Delivery
                                                    on Same Day?</span><a
                                                    href="/same-day-delivery-gifts-lp?promo=footer_Calender_Msg&amp;pincode=110086">View
                                                    Available Gifts</a></div>
                                        </div>
                                        <div class="personalized-image_personalizedImageContainer__1ZvB8 personalized-image_animate__3z8Px personalized-image_desktopPersonalizedImage__1aVH8  "
                                            role="presentation">
                                            <div class="personalized-image_labelInfoContent__3QUQK">
                                                <div class="personalized-image_customizeLabels__3xFT2">
                                                    <a class="personalized-image_customizeProductText__1pNP5"
                                                        data-toggle="modal" onclick="uploadpht();">Upload Photos</a>
                                                    <div class="personalized-image_uploadWrapperSubtext__3qZqG false">File
                                                        size between100KB - 10MB only JPG, JPEG, PNG</div>
                                                </div>
                                                <span class="personalized-image_rightArrowIcon__2m-dv">
                                                    <span class="material-icons" aria-hidden="true">
                                                        <svg class="MuiSvgIcon-root" focusable="false"
                                                            viewBox="0 0 24 24" aria-hidden="true">
                                                            <path d="M5.88 4.12L13.76 12l-7.88 7.88L8 22l10-10L8 2z"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-buttons_pdpbuttons">
                                        <div class="row">
                                            <div class="col-sm-6 custom-align-one">
                                                <button class="btn btn-add-to-cart" type="submit">
                                                    <span><i class="icofont-cart cart-icons-k"></i> ADD TO CART</span>
                                                </button>
                                            </div>
                                            <div class="col-sm-6 custom-align-two">
                                                <button class="btn btn-buy-now" type="submit">
                                                    <span><i class="icofont-thunder-light cart-icons-k"></i> BUY NOW</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------------------------offers available----------------->
                                    <div class="offers-available" id="offers-zone">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="offer-header">
                                                    <i class="fa fa-tags" aria-hidden="true"></i> <span>Offers
                                                        Available</span>
                                                </div>
                                                <div class="bank-offers">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img class="offer-images"
                                                                        src="images/first-orderCoupon-Code.png">
                                                                </td>
                                                                <td>
                                                                    <span>Get 15% Off* on First Order</span>
                                                                </td>
                                                                <td>
                                                                    <div class="offer-tnc">
                                                                        <span
                                                                            class="offer-tnc-txt blue-text">*T&amp;C</span>
                                                                        <div class="offer-tnc-popup"
                                                                            style="display: none;">
                                                                            <i class="material-icons close-tnc"></i>
                                                                            <div class="offer-tnc-head">Terms &amp;
                                                                                Conditions</div>
                                                                            <div class="offer-terms">

                                                                                <ul>
                                                                                    <li>
                                                                                        Applicable only for New Users, on
                                                                                        their 1st transaction
                                                                                    </li>
                                                                                    <li>
                                                                                        Maximum amount of discount that can
                                                                                        be availed by using this
                                                                                        discount is Rs. 500
                                                                                    </li>
                                                                                    <li>Code required to avail the discount
                                                                                        : FNPONE</li>
                                                                                    <li>
                                                                                        Users will get Flat 15% off on a
                                                                                        minimum cart value of Rs.
                                                                                        1099
                                                                                    </li>
                                                                                    <li>
                                                                                        Users will get Flat 12% off on cart
                                                                                        value between Rs. 999 to
                                                                                        Rs. 1098
                                                                                    </li>
                                                                                    <li>
                                                                                        Users will get Flat 10% off on cart
                                                                                        value between Rs. 399 to
                                                                                        Rs. 998
                                                                                    </li>
                                                                                    <li>Offer can be availed only once per
                                                                                        user</li>
                                                                                    <li>Offer not applicable on
                                                                                        International Products</li>
                                                                                    <li>
                                                                                        Offer is valid on the already
                                                                                        discounted products also
                                                                                    </li>
                                                                                    <li>
                                                                                        In case any order gets cancelled,
                                                                                        the Coupon Code cannot be
                                                                                        availed again
                                                                                    </li>
                                                                                    <li>Offer is valid only on www.fnp.com
                                                                                        &amp; not on FNP App</li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td>
                                                                    <img class="offer-images"
                                                                        src="images/aritel-logo.png">
                                                                </td>
                                                                <td>
                                                                    <span>Flat Rs.100 Cashback</span>
                                                                </td>
                                                                <td>
                                                                    <div class="offer-tnc">
                                                                        <span
                                                                            class="offer-tnc-txt blue-text">*T&amp;C</span>
                                                                        <div class="offer-tnc-popup"
                                                                            style="display: none;">
                                                                            <i class="material-icons close-tnc"></i>
                                                                            <div class="offer-tnc-head">Terms &amp;
                                                                                Conditions</div>
                                                                            <div class="offer-terms">

                                                                                <ul>
                                                                                    <li>
                                                                                        The offer is available only for
                                                                                        Airtel Payments Bank (APBL)
                                                                                        customers: a) wallet customers, b)
                                                                                        savings account customers
                                                                                    </li>
                                                                                    <li>
                                                                                        The maximum cashback amount per
                                                                                        transaction will be Rs
                                                                                        Rs.100
                                                                                    </li>
                                                                                    <li>
                                                                                        Limited period offer, offer
                                                                                        duration: Offer is valid till
                                                                                        30th September 2022
                                                                                    </li>
                                                                                    <li>
                                                                                        Offer is applicable only for
                                                                                        first-time users of Airtel
                                                                                        Payments Bank/Airtel Money Wallet on
                                                                                        Amazon
                                                                                    </li>
                                                                                    <li>
                                                                                        Minimum purchase of Rs. 900 is
                                                                                        mandatory for the customer to
                                                                                        be eligible for the offer
                                                                                    </li>
                                                                                    <li>
                                                                                        Cashback would be credited within 72
                                                                                        business hours in the
                                                                                        user's Airtel Payments Bank wallet
                                                                                        or savings account.
                                                                                    </li>
                                                                                    <li>
                                                                                        Airtel Payments Bank reserves the
                                                                                        right to disqualify any
                                                                                        Airtel Payments Bank wallet
                                                                                        holder(s) or Airtel Payments
                                                                                        Bank savings account holder(s) from
                                                                                        the benefits of this
                                                                                        offer in case of any fraudulent
                                                                                        activity/suspicious
                                                                                        transactions.
                                                                                    </li>
                                                                                    <li>
                                                                                        Airtel Payments Bank also reserves
                                                                                        the right to discontinue
                                                                                        this offer without assigning any
                                                                                        reasons or without any
                                                                                        prior intimation whatsoever.
                                                                                    </li>
                                                                                    <li>
                                                                                        In addition to the above, this offer
                                                                                        is also subject to
                                                                                        Airtel Payments Bank's General Terms
                                                                                        &amp; Conditions available
                                                                                        on
                                                                                        http://www.airtel.in/personal/money/terms-of-use.
                                                                                    </li>
                                                                                    <li>
                                                                                        For further details, please send
                                                                                        your queries to
                                                                                        wecare@airtelbank.com
                                                                                    </li>
                                                                                    <li>
                                                                                        NO KYC Wallets are not eligible for
                                                                                        this cashback(wallet to
                                                                                        be upgraded to a MINKYC with minimum
                                                                                        ID &amp; Add verification
                                                                                        docs)
                                                                                    </li>
                                                                                    <li>Not applicable on mastercard
                                                                                        transactions</li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img class="offer-images"
                                                                        src="images/MobiKwik-Logo.png">
                                                                </td>
                                                                <td>
                                                                    <span>Upto Rs.750 Cashback</span>
                                                                </td>
                                                                <td>
                                                                    <div class="offer-tnc">
                                                                        <span
                                                                            class="offer-tnc-txt blue-text">*T&amp;C</span>
                                                                        <div class="offer-tnc-popup"
                                                                            style="display: none;">
                                                                            <i class="material-icons close-tnc"></i>
                                                                            <div class="offer-tnc-head">Terms &amp;
                                                                                Conditions</div>
                                                                            <div class="offer-terms">

                                                                                <ul>
                                                                                    <li>Get upto Rs 750 cashback on your
                                                                                        Mobikwik Wallet</li>
                                                                                    <li>Transaction to be done through
                                                                                        Mobikwik wallet</li>
                                                                                    <li>Minimum Assured cashback that can be
                                                                                        availed is Rs 35</li>
                                                                                    <li>Offer can be availed on a minimum
                                                                                        transaction of Rs 750</li>
                                                                                    <li>Offer can be availed only once
                                                                                        during the offer period</li>
                                                                                    <li>Cashback will be credited into your
                                                                                        MobiKwik wallet within 24 hours</li>
                                                                                    <li>Valid till 30th September 2022</li>
                                                                                    <li>T&amp;C applied</li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------------------products describtions------------------>
                                    <div id="product-description">
                                        <div class="product-desc-desktop_productDescription">
                                            <div class="product-box-one-news">
                                                <h4>Description</h4>
                                                <p><b>Product Details:</b></p>
                                                <ul>
                                                    <li>2 Pcs of Dairy Milk Chocolates- 12.5 gms</li>
                                                    <li>2 Pcs of Nestle KitKat Chocolates- 27.5 gms</li>
                                                    <li>One Red &amp; White Teddy</li>
                                                    <li>Height- 6 Inches</li>
                                                    <li>Cute Teddy Bear Holding Heart</li>
                                                    <li>This season of Love, spread happiness with this beautiful gift combo
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-desc-desktop_productDescription">
                                            <div class="product-box-one-news">
                                                <h4>Delivery Information</h4>
                                                <ul>
                                                    <li>2 Pcs of Dairy Milk Chocolates- 12.5 gms</li>
                                                    <li>2 Pcs of Nestle KitKat Chocolates- 27.5 gms</li>
                                                    <li>One Red &amp; White Teddy</li>
                                                    <li>Height- 6 Inches</li>
                                                    <li>Cute Teddy Bear Holding Heart</li>
                                                    <li>This season of Love, spread happiness with this beautiful gift combo
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-desc-desktop_productDescription">
                                            <div class="product-box-one-news">
                                                <h4>Care Instructions</h4>
                                                <ul>
                                                    <li>2 Pcs of Dairy Milk Chocolates- 12.5 gms</li>
                                                    <li>2 Pcs of Nestle KitKat Chocolates- 27.5 gms</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="share">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="offer-header">
                                                        <i class="icofont-shield-alt" aria-hidden="true"></i>
                                                        <span>Guaranteed Safe Checkout</span>
                                                    </div>
                                                    <div class="safe-checkout">
                                                        <img src="images/payment-pic.png" class="img-fluid"
                                                            alt="">
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
            </section>
















            <!--------------------------------What-Customers-Are-Saying--------------------->


            <!---------------------------------What others are viewing---------------------->
            <section class="twentyone-recently-viewed-total">
                <div class="container-fluid">
                    <div class="category-title">
                        <h3>RELATED PRODUCT</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="" data-loop="true" data-dots="false" data-nav="true" data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-188px, 0px, 0px); transition: all 2s ease 0s; width: 1506px;">
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom">
                                                        <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot"><span></span>
                                    </button>
                                    <button role="button" class="owl-dot active"><span></span>
                                    </button>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                        type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button></div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot active"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---------------------------------Recently Viewed By You----------------------->

            <!-- END MAIN CONTENT -->
            <!---------------------------------Recently Viewed By You----------------------->
            <section class="twentyone-recently-viewed-total">
                <div class="container-fluid">
                    <div class="category-title">
                        <h3>Product Carousel</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="" data-loop="true" data-dots="false" data-nav="true" data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-188px, 0px, 0px); transition: all 2s ease 0s; width: 1506px;">
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom">
                                                        <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 178.143px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="#">
                                                            <img src="images/product.png" alt="product_img1">
                                                        </a>
                                                        <!-- <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icofont-cart"></i> Add To Cart</a>
                                                        </li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                    </div>
                                                    <div class="custom"> <a href="#"
                                                            class="Customizavle-label">CUSTOMIZABLE</a>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="#">Pen &amp; Pencils</a>
                                                        </h6>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:100%">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </div>
                                                            <span class="rating_num">(21)</span>
                                                        </div>
                                                        <div class="product_price"> <span class="price">₹50.00</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Phasellus blandit massa enim. Nullam id varius nunc id
                                                                varius nunc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot"><span></span>
                                    </button>
                                    <button role="button" class="owl-dot active"><span></span>
                                    </button>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                        type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button></div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot active"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- upload modal -->
        <div class="modal fade" id="uploadPht" tabindex="-1" role="dialog" aria-labelledby="uploadPhtLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header upload-header">
                        <div class="customize-product-modal-content_multiImageHeading__1BTdq">Upload Photos</div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <style>
                            customize-product-modal-content_desktopPhotosAction__3a4g_ {
                                border-radius: 8px;
                                height: 489px;
                                padding-top: 18px;
                                padding-bottom: 4px;
                                overflow: hidden;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u {
                                padding: 14px 12px;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                background-color: #f2f2f2;
                                height: auto;
                                overflow: scroll;
                            }

                            .customize-product-modal-content_multiImageHeading__1BTdq {
                                font-size: 16px;
                                font-weight: 500;
                                padding: 14px 25px;
                                border-bottom: 1px solid #d5d5d5;
                                background: #f2f2f2;
                                border-radius: 8px 8px 0 0;
                                text-align: center;
                            }

                            .customize-product-modal-content_desktopPhotosAction__3a4g_ .customize-product-modal-content_allDesktopPhotosContainer__2b9lp {
                                overflow: hidden;
                                height: 185px;
                                padding-right: 2px;
                            }

                            .customize-product-modal-content_allPhotosContainer__rIaJL {
                                width: 100%;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_allPhotos__3KmU8 {
                                display: -webkit-flex;
                                display: -moz-box;
                                display: flex;
                                -webkit-flex-wrap: wrap;
                                flex-wrap: wrap;
                                width: 100%;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_allPhotos__3KmU8 .customize-product-modal-content_photoRoot__2KVu_ {
                                width: 24%;
                                height: 80px;
                                margin: .5% .5% 1.4%;
                                position: relative;
                                padding: 1%;
                            }

                            .customize-product-modal-content_photoRoot__2KVu_ {
                                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
                                background-color: #f2f2f2;
                                display: -webkit-flex;
                                display: -moz-box;
                                display: flex;
                                -webkit-align-items: center;
                                -moz-box-align: center;
                                align-items: center;
                                border: 3px solid #fff;
                                border-radius: 3px;
                            }


                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_allPhotos__3KmU8 .customize-product-modal-content_photoRoot__2KVu_ .customize-product-modal-content_photoInnerContainer__cPNuU .customize-product-modal-content_innerText__2sHfy {
                                margin: auto;
                                font-size: 21px;
                                line-height: .9;
                                color: #979797;
                            }

                            *,
                            body {
                                padding: 0;
                                margin: 0;
                                font-family: Roboto, sans-serif;
                            }

                            * {
                                -webkit-box-sizing: border-box;
                                -moz-box-sizing: border-box;
                                box-sizing: border-box;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_allPhotos__3KmU8 .customize-product-modal-content_photoRoot__2KVu_ .customize-product-modal-content_photoInnerContainer__cPNuU {
                                width: 100%;
                                height: 100%;
                                opacity: .5;
                                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
                                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
                                background-color: #f2f2f2;
                                display: -webkit-flex;
                                display: -moz-box;
                                display: flex;
                                -webkit-align-items: center;
                                -moz-box-align: center;
                                align-items: center;
                                border: 3px solid #fff;
                                border-radius: 3px;
                                cursor: pointer;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_h2Outer__2MUgo {
                                text-align: center;
                                border-bottom: 1px solid #999;
                                line-height: .1em;
                                margin: 21px 0 19px;
                                width: 100%;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_h2Outer__2MUgo .customize-product-modal-content_spanInner__1UuZe {
                                font-size: 14px;
                                font-weight: 400;
                                color: #222;
                                width: 17px;
                                height: 10px;
                                line-height: .14;
                                background-color: #f2f2f2;
                                padding: 0 5px;
                            }

                            *,
                            body {
                                padding: 0;
                                margin: 0;
                                font-family: Roboto, sans-serif;
                            }

                            * {
                                -webkit-box-sizing: border-box;
                                -moz-box-sizing: border-box;
                                box-sizing: border-box;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_h2Outer__2MUgo {
                                text-align: center;
                                border-bottom: 1px solid #999;
                                line-height: .1em;
                                margin: 21px 0 19px;
                                width: 100%;
                            }

                            user agent stylesheet h2 {
                                font-size: 1.5em;
                                font-weight: bold;
                            }

                            .modal-datetime-picker_desktopModal__1jEM2 .modal-date-time-picker-wrapper.multiple-photo-modal .modal-date-time-picker-container {
                                width: 700px;
                                min-height: 270px;
                                height: auto;
                                border-radius: 8px;
                                background: #f2f2f2;
                                text-align: center;
                                overflow: hidden;
                            }

                            .modal-datetime-picker_desktopModal__1jEM2 .modal-date-time-picker-wrapper .modal-date-time-picker-container {
                                width: 532px;
                                min-height: 450px;
                                height: auto;
                                padding: 0;
                                top: 70px;
                                text-align: center;
                                border-radius: 10px;
                                background: #fff;
                                position: fixed;
                                left: 0;
                                right: 0;
                                margin: 0 auto;
                                -webkit-box-shadow: 2px 4px 5px 0 rgba(11, 11, 12, .2);
                                box-shadow: 2px 4px 5px 0 rgba(11, 11, 12, .2);
                                display: -webkit-flex;
                                display: -moz-box;
                                display: flex;
                                outline: none;
                            }

                            .customize-product-modal-content_selectCursorPointer___bWRi {
                                cursor: pointer;
                            }

                            .customize-product-modal-content_selectPhotosButton__2Y2dv {
                                padding: 12px;
                                background-color: #7d8035;
                                border-radius: 4px;
                                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
                                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
                                height: 46px;
                                width: 222px;
                                font-size: 16px;
                                font-weight: 600;
                                color: #fff;
                                border: none;
                                text-align: center;
                                margin-top: 14px;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_multiPhotoError__2Pan4 {
                                width: 280px;
                                height: 30px;
                                line-height: 1.3;
                                text-align: center;
                                margin-top: 13px;
                                margin-bottom: 12px;
                                display: -webkit-flex;
                                display: -moz-box;
                                display: flex;
                                -webkit-justify-content: center;
                                -moz-box-pack: center;
                                justify-content: center;
                                font-size: 14px;
                                font-weight: 400;
                                color: #222;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_multiPhotoError__2Pan4 svg {
                                width: 18px;
                                height: 18px;
                                margin-right: 3px;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_desktopContinueButton__jKkTE {
                                bottom: 1px;
                                position: absolute;
                                padding: 15px;
                                -webkit-box-shadow: 0 0 7px 0 #e0dcdc;
                                box-shadow: 0 0 7px 0 #e0dcdc;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_continueButtonContainer__1w1up {
                                width: 100%;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_desktopContinueButton__jKkTE .customize-product-modal-content_desktopButton__3zK5q {
                                font-size: 12px;
                                height: 35px;
                                min-height: 30px;
                                width: 142px;
                                min-width: 140px;
                            }

                            .customize-product-modal-content_photosActionContainer__1Jr5u .customize-product-modal-content_continueButtonContainer__1w1up button {
                                height: 52px;
                            }

                            button.disable-form-continue-button {
                                color: rgba(255, 255, 255, .8);
                                -webkit-box-shadow: none;
                                box-shadow: none;
                                opacity: .6;
                            }

                            button.form-button-disabled,
                            button.form-button-primary,
                            button.form-button-secondary {
                                padding: 16px;
                                position: relative;
                                width: 100%;
                                background: #e87325;
                                border: 0;
                                color: #fff;
                                max-height: 52px;
                                min-height: 50px;
                                font-size: 18px;
                                line-height: 24px;
                                font-weight: 500;
                                text-transform: uppercase;
                                outline: none;
                                -webkit-box-shadow: none;
                                box-shadow: none;
                            }

                            <style>.MuiButton-contained {
                                color: rgba(0, 0, 0, 0.87);
                                box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
                                background-color: #e0e0e0;
                            }

                            <style>.MuiButton-root {
                                color: rgba(0, 0, 0, 0.87);
                                padding: 6px 16px;
                                font-size: 0.875rem;
                                min-width: 64px;
                                box-sizing: border-box;
                                transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
                                font-family: Roboto, sans-serif;
                                font-weight: 500;
                                line-height: 1.75;
                                border-radius: 4px;
                                text-transform: uppercase;
                            }

                            <style>.MuiButtonBase-root {
                                color: inherit;
                                border: 0;
                                cursor: pointer;
                                margin: 0;
                                display: inline-flex;
                                outline: 0;
                                padding: 0;
                                position: relative;
                                align-items: center;
                                user-select: none;
                                border-radius: 0;
                                vertical-align: middle;
                                -moz-appearance: none;
                                justify-content: center;
                                text-decoration: none;
                                background-color: transparent;
                                -webkit-appearance: none;
                                -webkit-tap-highlight-color: transparent;
                            }

                            .MuiButton-label {
                                width: 100%;
                                display: inherit;
                                align-items: inherit;
                                justify-content: inherit;
                            }

                            .customize-product-modal-content_hideElement__3ZBKp {
                                display: none;
                            }

                            .MuiSvgIcon-root {
                                fill: currentColor;
                                width: 1em;
                                height: 1em;
                                display: inline-block;
                                font-size: 1.5rem;
                                transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
                                flex-shrink: 0;
                                user-select: none;
                            }
                        </style>

                        <div class="modal-fullscreen-body">
                            <div
                                class="customize-product-modal-content_photosActionContainer__1Jr5u photos-container customize-product-modal-content_desktopPhotosAction__3a4g_
  }">
                                <div class="customize-product-modal-content_allPhotosContainer__rIaJL all-mobile-photos customize-product-modal-content_allDesktopPhotosContainer__2b9lp"
                                    id="dm-wrapper">
                                    <div class="customize-product-modal-content_allPhotos__3KmU8">
                                        <div class="customize-product-modal-content_photoRoot__2KVu_">
                                            <input accept="image/jpg, image/jpeg, image/png" type="file"
                                                hidden=""
                                                class="customize-product-modal-content_hideElement__3ZBKp personalized-multi-image-single-upload"
                                                id="personalized-multi-image-0" name="PersonalizedImage"
                                                required="" data-testid="personalized-multi-image-0">
                                            <label for="personalized-multi-image-0"
                                                data-multiupload-id="PersonalizedImage-0">
                                                <div class="customize-product-modal-content_photoInnerContainer__cPNuU">
                                                    <span
                                                        class="customize-product-modal-content_innerText__2sHfy">+</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="customize-product-modal-content_photoRoot__2KVu_">
                                            <input accept="image/jpg, image/jpeg, image/png" type="file"
                                                hidden=""
                                                class="customize-product-modal-content_hideElement__3ZBKp personalized-multi-image-single-upload"
                                                id="personalized-multi-image-0" name="PersonalizedImage"
                                                required="" data-testid="personalized-multi-image-0">
                                            <label for="personalized-multi-image-0"
                                                data-multiupload-id="PersonalizedImage-0">
                                                <div class="customize-product-modal-content_photoInnerContainer__cPNuU">
                                                    <span
                                                        class="customize-product-modal-content_innerText__2sHfy">+</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="customize-product-modal-content_photoRoot__2KVu_">
                                            <input accept="image/jpg, image/jpeg, image/png" type="file"
                                                hidden=""
                                                class="customize-product-modal-content_hideElement__3ZBKp personalized-multi-image-single-upload"
                                                id="personalized-multi-image-2" name="PersonalizedImage"
                                                required="" data-testid="personalized-multi-image-2">
                                            <label for="personalized-multi-image-2"
                                                data-multiupload-id="PersonalizedImage-2">
                                                <div class="customize-product-modal-content_photoInnerContainer__cPNuU">
                                                    <span
                                                        class="customize-product-modal-content_innerText__2sHfy">+</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="customize-product-modal-content_h2Outer__2MUgo"><span
                                        class="customize-product-modal-content_spanInner__1UuZe">OR</span></h2>
                                <label for="personalized-multi-image">
                                    <input type="file" id="personalized-multi-image" name="file"
                                        hidden="" accept="image/jpg, image/jpeg, image/png"
                                        class="customize-product-modal-content_hide__1yGZ7" required=""
                                        hidden="" multiple="">
                                    <div>
                                        <div type="button"
                                            class="customize-product-modal-content_selectPhotosButton__2Y2dv customize-product-modal-content_selectCursorPointer___bWRi">
                                            + SELECT PHOTOS</div>
                                    </div>
                                </label>
                                <div id="upload-in-progress"
                                    class="customize-product-modal-content_upload-inprogress-wrapper__1CLLf">
                                    <div>Please wait, uploading photos</div>
                                </div>
                                <div class="customize-product-modal-content_multiPhotoError__2Pan4 ">
                                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                                        </path>
                                    </svg>
                                    File size should be between 100 KB - 10 MB. Only JPG, JPEG, PNG.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <div
                            class="customize-product-modal-content_continueButtonContainer__1w1up customize-product-modal-content_desktopContinueButton__jKkTE">
                            <button
                                class="MuiButtonBase-root MuiButton-root MuiButton-contained form-button-primary customize-product-modal-content_desktopButton__3zK5q disable-form-continue-button"
                                tabindex="0" type="button" data-testid=""><span
                                    class="MuiButton-label">Continue</span></button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- upload modal -->
        <div class="modal fade" id="uploadTxt" tabindex="-1" role="dialog" aria-labelledby="uploadTxtLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header upload-header">
                        <h5 class="modal-title upload-shows" id="uploadTxtLabel">Upload Text</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="all-product-img-upload">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="upload-text-area">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group q-grp">
                                                    <textarea name="message" rows="3" class="form-control quick-textaeea" placeholder="Type Here"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="upload-continue">
                            <button type="button" class="btn btn-primary btn-orange">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
