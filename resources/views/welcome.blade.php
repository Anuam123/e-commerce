@extends('front.layouts.master')
@section('title', 'Welcome to PrintMount')
@section('content')


    <!------------------------------------START SECTION BANNER--------------------------------->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        <div class="container-fluid-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-12 offset-lg-0">
                    <div id="carouselExampleControls" class="carousel slide light_arrow" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($homeSlider as $key => $slider)
                                <div class="carousel-item @if ($key === 0) active @endif background_bg"
                                    data-img-src="{{ asset('images/' . $slider->banner_images) }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators indicators_style1">
                            @foreach ($homeSlider as $key => $slider)
                                <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}"
                                    @if ($key === 0) class="active" @endif>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-----------------------------//END SECTION BANNER----------------------------------->
    <!---------------------------------- MAIN CONTENT ---------------------------------->

    <div class="main_content">
        <div id="mobile">
            <center>
                <h3 class="text-center" style="color: #0c54a0;font-size: 30px;">Printmont is India’s Best Online
                    Gift Store</h3>
                <h6>Personalized Gifts | Corporate Gifts | Business Gifts | Doctor Gifts | Promotional Gifts</h6>
            </center><br>
        </div>
        <div class="container-fluid" id="topsectionfour">
            <div class="row">

               @foreach($corporate_gifts as $key => $copgifts)
    <div class="col-md-6 col-lg-3 col-xs-6" style="padding-right: 0px !important; padding-left: 9px !important;">
        @if ($copgifts->productImageItems->isNotEmpty())
            @foreach ($copgifts->productImageItems as $productImageItem)
                <a href="#">
                    <img src="{{ asset('product_gallery_pic/' . $productImageItem->product_gallery_pic) }}" class="pt-2">
                </a>
            @endforeach
        @else
            <a href="#">
                <img src="{{ asset('default_image.jpg') }}" class="pt-2"> <!-- Fallback/default image -->
            </a>
        @endif
    </div>
@endforeach

               
            </div>
        </div>
        <!-- START CATEGORY LOGO -->
        <div class="section small_pt pb-4" id="mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="all-category-title">
                            <div class="heading_s2 pb-4">
                                <h2 class="text-center">All Deal Categories</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false"
                            data-nav="true" data-margin="30" data-loop="true" data-autoplay="true"
                            data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                            @foreach($categories as $key => $cats) 

                            <div class="item">
                                <div class="cl_logo">
                                    <a href="#">
                                        <img src="{{ asset('images/' . $cats->category_image) }}" alt="cl_logo" />
                                    </a>
                                    <h6 class="text-center">{{$cats->category_name}}</h6>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CATEGORY LOGO -->
        <div class="giftFinder" id="mobile">
            <style>
                .giftFinder {
                    padding-top: 50px;
                    padding-bottom: 50px;
                }

                .desktopError {
                    display: none;
                    position: absolute;
                    width: 280px;
                    align-items: center;
                    justify-content: center;
                    padding: 10px;
                    top: -28%;
                    background: #9f0808;
                    transform: translate(-77%, -50%);
                    left: 50%;
                    border-radius: 4px;
                    color: #fff;
                    -webkit-animation: err-msg 0.6s infinite linear;
                    animation: err-msg 0.6s infinite linear;
                }

                .desktopError:after {
                    content: "";
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 10px 10px 0 10px;
                    border-color: #9f0808 transparent transparent transparent;
                    position: absolute;
                    bottom: -10px;
                }

                .new-loader-area {
                    width: 100%;
                    height: 100%;
                    display: block;
                    position: absolute;
                    margin: 0 !important;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 110;
                    border-radius: 0;
                }

                .new-loader {
                    width: 32px;
                    height: 32px;
                    margin: 0 auto;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-left: -16px;
                    margin-top: -16px;
                    border: 4px solid rgba(0, 0, 0, 0.25);
                    border-top: 4px solid #0c54a0;
                    border-radius: 50%;
                    -webkit-animation: b 0.6s infinite linear;
                    animation: b 0.6s infinite linear;
                }

                @keyframes b {
                    0% {
                        transform: rotate(0);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }

                /*quick search*/
                .quick-search {
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%, 0);
                    min-width: 1000px;
                    z-index: 92;
                }

                .quick-search form {
                    float: left;
                    width: 100%;
                    padding: 15px 20px;
                    background: #fff;
                    text-align: center;
                    border-radius: 4px;
                    /* overflow: hidden; */
                    display: flex;
                    align-items: center;
                    box-shadow: 0 4px 80px rgba(0, 0, 0, 0.2);
                }

                .quick-search-title {
                    color: #222;
                    font-size: 18px;
                    font-weight: 600;
                    line-height: 1;
                    text-align: left;
                    float: left;
                    width: 10%;
                    margin: 0;
                    text-transform: uppercase;
                }

                .quick-search form .sec {
                    float: left;
                    width: 28.6%;
                    position: relative;
                    background: #fff;
                    border-radius: 4px;
                    margin-right: 2%;
                }

                .quick-search form .sec span#occassions:after,
                .quick-search form .sec span#giftType:after {
                    position: absolute;
                    content: "\f105";
                    font-family: "FontAwesome";
                    color: #222;
                    right: 11px;
                    top: 12px;
                    font-size: 24px;
                    line-height: 1;
                    z-index: 1;
                }

                .quick-search form .sec.date-input:before {
                    content: "\e616";
                }

                .quick-search form .sec.city-input:before {
                    content: "\e7f1";
                }

                .quick-search form .sec.gift-input,
                .quick-search form .sec.date-input {
                    float: left;
                }

                .quick-search form .sec span {
                    display: block;
                    width: 100%;
                    padding: 0px 35px 5px 7px;
                    text-align: left;
                    font-size: 18px;
                    border-radius: 4px;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    position: relative;
                    z-index: 1;
                    border: 1px solid #ccc;
                    background: #f6f6f6;
                    color: #222;
                    font-weight: 500;
                    height: 50px;
                    cursor: pointer;
                    transition: all ease-in-out 0.25s;
                }

                .quick-search form .sec span .placeholders {
                    box-shadow: none;
                    padding: 0px 0 0;
                    border: 0;
                    font-size: 14px;
                    font-weight: 400;
                    height: auto;
                    background: none;
                }

                .quick-search form .sec span .placeholders.selected {
                    color: #008539;
                }

                .quick-search form #quick-search-btn {
                    display: inline-block;
                    background: #0c54a0;
                    color: #fff;
                    text-transform: uppercase;
                    font-weight: 500 !important;
                    font-size: 18px !important;
                    padding: 10px 10px;
                    border-radius: 4px;
                    width: 100%;
                    border: 0;
                    height: 50px;
                    transition: all ease-in-out 0.25s;
                    cursor: pointer;
                }

                .quick-search form #quick-search-btn:hover {
                    background: #0c54a0;
                    opacity: 0.7;
                }

                .listPopup {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 90%;
                    max-width: 325px;
                    max-height: 90%;
                    background: #fff;
                    border-radius: 4px;
                    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
                    z-index: 99999;
                    display: none;
                }

                /*	.pincodeSec::before {*/
                /*    font-family: "Font Awesome";*/
                /*    content: "\f041";*/
                /*    position: absolute;*/
                /*    left: 10px;*/
                /*    top: 50%;*/
                /*    transform: translateY(-50%);*/
                /*    font-size: 20px;*/
                /*    color: #555;*/
                /*}*/
                .listPopup h2 {
                    padding: 10px 15px;
                    font-weight: 400;
                    line-height: 1;
                    background: #f1f1f1;
                    font-size: 20px;
                    border-radius: 4px 4px 0 0;
                    margin: 0;
                    color: #222;
                }

                .listPopup i {
                    width: 44px;
                    height: 44px;
                    text-align: center;
                    position: absolute;
                    top: 0;
                    right: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    max-width: inherit;
                }

                .listPopup ul {
                    float: left;
                    width: 100%;
                    max-height: 450px;
                    min-height: 100px;
                    overflow: auto;
                    display: flex;
                    flex-wrap: wrap;
                    background: #fff;
                    position: relative;
                }

                .listPopup ul li {
                    padding: 10px 15px;
                    width: 100%;
                    cursor: pointer;
                    font-size: 14px;
                    line-height: 1;
                }

                .clear-form {
                    color: #387689;
                    float: right;
                    /*background: #387689;*/
                    font-size: 12px;
                    padding: 8px 10px;
                    border-radius: 4px;
                    line-height: 1;
                    margin-top: -4px;
                    transition: all ease-in-out 0.25s;
                }

                .clear-form.hide {
                    opacity: 0.5;
                    pointer-events: none;
                    display: inline-block;
                }

                .sec.submit {
                    background: none !important;
                    margin-right: 0 !important;
                }

                .sec.submit:after {
                    display: none;
                }

                .transbg {
                    left: 0;
                    position: fixed;
                    top: 0;
                    width: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    z-index: 99999;
                    height: 100%;
                    display: none;
                }

                .msgtoast {
                    padding: 5px;
                    font-size: 14px;
                    font-weight: 400;
                    float: left;
                    width: 100%;
                    text-align: left;
                    color: #e03131;
                    margin-top: -15px;
                    display: none;
                }

                .msgtoast.shake {
                    animation: shaking 0.2s infinite;
                    -webkit-animation: shaking 0.2s infinite;
                }

                .inputs-sec:hover {
                    background: #e2e1e1 !important;
                }

                /*animations*/
                @keyframes shaking {
                    0% {
                        transform: translateX(0px);
                    }

                    50% {
                        transform: translateX(10px);
                    }

                    100% {
                        transform: translateX(-10px);
                    }
                }

                /*errors*/
                .errors-msg {
                    position: absolute;
                    padding: 10px;
                    background: rgba(0, 0, 0, 0.8);
                    color: #fff;
                    font-size: 14px;
                    line-height: 1;
                    text-align: center;
                    border-radius: 4px;
                    top: -44px;
                    left: 28%;
                    transition: all ease-in-out 0.25s !important;
                    -webkit-transition: all ease-in-out 0.25s !important;
                    -moz-transition: all ease-in-out 0.25s !important;
                    -o-transition: all ease-in-out 0.25s !important;
                    -webkit-animation: err-msg ease-in-out 1500ms infinite;
                    -moz-animation: err-msg ease-in-out 1500ms infinite;
                    animation: err-msg ease-in-out 1500ms infinite;
                    display: none;
                }

                .errors-msg:after {
                    content: "";
                    position: absolute;
                    border-right: solid 10px transparent;
                    border-top: solid 10px rgba(0, 0, 0, 0.8);
                    border-left: solid 10px transparent;
                    bottom: -10px;
                    left: 50%;
                    transform: translate(-50%, 0);
                }

                #gift-type.errors,
                #occassions.errors {
                    color: #e32b2b;
                    border: 1px solid #e32b2b;
                    transition: all ease-in-out 0.25s !important;
                    -webkit-transition: all ease-in-out 0.25s !important;
                    -moz-transition: all ease-in-out 0.25s !important;
                    -o-transition: all ease-in-out 0.25s !important;
                    -webkit-animation: err ease-in-out 1500ms infinite;
                    -moz-animation: err ease-in-out 1500ms infinite;
                    animation: err ease-in-out 1500ms infinite;
                }

                @keyframes err {
                    0% {
                        -webkit-box-shadow: 0 0 0px #e32b2b;
                        -moz-box-shadow: 0 0 0px #e32b2b;
                        box-shadow: 0 0 0px #e32b2b;
                    }

                    50% {
                        -webkit-box-shadow: 0 0 10px #e32b2b;
                        -moz-box-shadow: 0 0 10px #e32b2b;
                        box-shadow: 0 0 10px #e32b2b;
                    }

                    100% {
                        -webkit-box-shadow: 0 0 px #e32b2b;
                        -moz-box-shadow: 0 0 px #e32b2b;
                        box-shadow: 0 0 px #e32b2b;
                    }
                }

                @keyframes err-msg {
                    0% {
                        top: -44px;
                    }

                    50% {
                        top: -54px;
                    }

                    100% {
                        top: -44px;
                    }
                }

                /*pincode*/
                #QuickSeacrchpincode {
                    padding: 10px 10px 10px 40px;
                    height: 50px;
                    border-radius: 4px;
                    border: 1px solid #d5d5d5;
                    min-width: 206px;
                    max-width: 206px;
                    font-size: 16px;
                }

                /*.pincodeSec::before {*/
                /*	content: "\e0c8";*/
                /*	font-family: "Material Icons";*/
                /*	color: #555;*/
                /*	position: absolute;*/
                /*	font-size: 22px;*/
                /*	top: 14px;*/
                /*	left: 10px;*/
                /*}*/
                #QuickSeacrchpincode:focus-visible,
                #QuickSeacrchpincode:outline {
                    border: 1px solid #d5d5d5 !important;
                }

                .pincodeListItems {
                    position: absolute;
                    z-index: 99;
                    background: #fff;
                    display: flex;
                    flex-direction: column;
                    width: 100%;
                    text-align: left;
                    box-shadow: 0 2px 3px rgb(0 0 0 / 30%);
                    display: none;
                }

                .pincodeListItems span {
                    padding: 7px 10px !important;
                    color: #2076cb !important;
                    background: #f1f1f1 !important;
                    font-size: 14px !important;
                    border-bottom: 1px solid #d5d5d5 !important;
                    height: inherit !important;
                    border-radius: 0 !important;
                    border-top: 0 !important;
                    border-left: 0 !important;
                    border-right: 0 !important;
                }

                .pincodeListItems span:last-child {
                    border: none !important;
                }

                .pincodeListItems ul {
                    overflow: hidden;
                    max-height: 176.95px;
                }

                .pincodeListItems ul li {
                    padding: 6px 10px 6px 30px;
                    font-size: 14px;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    border-bottom: 1px solid #d5d5d5;
                    position: relative;
                    cursor: pointer;
                }

                /*.pincodeListItems ul li::before {*/
                /*	content: "\e0c8";*/
                /*	font-family: "Material Icons";*/
                /*	position: absolute;*/
                /*	left: 7px;*/
                /*	font-size: 18px;*/
                /*	top: 2px;*/
                /*	color: #666;*/
                /*}*/
                .pincodeListItems ul li:hover::before {
                    color: #e03131;
                }

                .popupTransBg {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: rgba(0, 0, 0, 0.5);
                    z-index: 9999;
                }

                .dontknowPopup {
                    font-size: 14px;
                    background: rgb(255, 255, 255);
                    box-shadow: rgb(11 11 12 / 20%) 2px 4px 5px 0px;
                    text-align: center;
                    font-family: Roboto, Arial, sans-serif;
                    line-height: 1;
                    border-radius: 8px;
                    padding: 30px;
                    position: relative;
                    height: 53%;
                    width: 30%;
                }

                .dontknowPopup i.closePopup {
                    top: 10px;
                    right: 10px;
                    padding: 0;
                    position: absolute;
                    color: #0000008a;
                    cursor: pointer;
                }

                .dontknowPopup .location-popup_location-heading-suggestion {
                    font-size: 22px;
                    font-weight: 500;
                }

                .dontknowPopup .location-popup_location-subheading-suggestion {
                    color: #555;
                    font-size: 14px;
                    padding: 10px 0 0;
                }

                .dontknowPopup .location-popup_area-block {
                    width: 100%;
                    margin: 0 auto;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    position: relative;
                    height: 157px;
                    max-width: 75%;
                }

                .dontknowPopup .location-popup_pin-search-box {
                    width: 100%;
                    display: flex;
                    align-items: center;
                }

                .dontknowPopup .location-popup_place-icon {
                    position: absolute;
                    color: #666;
                    z-index: 999;
                }

                .dontknowPopup .location-popup_place-icon>.location-popup_place-pin {
                    padding: 0 8px;
                    font-size: 20px;
                    line-height: 2;
                }

                .dontknowPopup .location-popup_cancel-icon {
                    color: #fff;
                    right: 5px;
                    width: 16px;
                    cursor: pointer;
                    height: 16px;
                    display: none;
                    padding: 5px;
                    position: absolute;
                    background: #999;
                    text-align: center;
                    border-radius: 50%;
                }

                .dontknowPopup .location-popup_cancel-icon>.location-popup_clear-pin {
                    right: 2px;
                    font-size: 12px;
                    top: 2px;
                    position: absolute;
                    padding: 0;
                }

                .dontknowPopup .location-popup_pin-search-box>div>input {
                    -webkit-box-shadow: 0 0 10px #e87325;
                    box-shadow: 0 0 10px #e87325;
                    border: 1px solid #e87325;
                    color: #222;
                    width: 100%;
                    margin: 0;
                    display: flex;
                    padding: 0 30px;
                    -webkit-animation: location-popup_focuses 1.5s ease-in-out infinite;
                    animation: location-popup_focuses 1.5s ease-in-out infinite;
                    font-size: 16px;
                    min-height: 40px;
                    border-radius: 4px;
                }

                #popupContinue {
                    background-color: rgb(255, 146, 18);
                    width: 100%;
                    padding: 12px 0px;
                    margin: 20px 0px;
                    font-size: 18px;
                    font-weight: 500;
                    box-shadow: rgb(0 0 0 / 10%) 0px 2px 4px 0px;
                    border-radius: 4px;
                    color: rgb(255, 255, 255);
                    height: 44px;
                    text-transform: uppercase;
                }

                #popupContinue:disabled {
                    opacity: 0.5;
                    pointer-events: none;
                }

                .location-popup_selected-pin {
                    color: #555;
                    display: block;
                    font-size: 13px;
                    margin-top: 10px;
                    text-align: right;
                    font-weight: 700;
                }
            </style>
            <center>
                <h2 class="text-center" style="font-size: 32px;">Find Gift for your Business and Loved Ones</h2>
            </center>
            <br>
            <div class="quick-search">
                <div class="desktopError">Please select Occasion or Gift Type</div>
                <form id="quick-search-form" autocomplete="off">
                    <h3 class="quick-search-title">
                        Gift Finder
                    </h3>
                    <div class="sec occassions-input pincodeSec">
                        <!--<i style="font-size:24px" class="fas">&#xf0c9;</i>-->
                        <input type="text" id="QuickSeacrchpincode" placeholder="Enter Pincode">
                        <input type="hidden" id="lastSelectedPincode">
                        <input type="hidden" id="lastSelectedAddress">
                        <div class="pincodeListItems" style="display: none;">
                            <ul id="pincodeUL"></ul>
                            <span id="dontknow">Don't Know Pincode?</span>
                            <span id="dontsee">Don't see your Pincode?</span>
                        </div>
                    </div>
                    <div class="sec occassions-input">
                        <input type="hidden" id="occassionsinput">
                        <span class="inputs-sec" id="occassions">
                            Occasion<span class="placeholders">Birthday, Anniversary etc.</span>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="sec gift-input">
                        <input type="hidden" id="gifttypeinput">
                        <span class="inputs-sec" id="giftType">Gift Type<span class="placeholders">Flowers,
                                Cakes, Plants, etc.</span></span>
                    </div>
                    <div class="sec submit">
                        <button type="button" id="quick-search-btn">Find Gift</button>
                    </div>
                    <div class="errors-msg">Select Occasion or Gift Type</div>
                </form>

            </div>
            <div class="transbg"></div>

        </div>
        <div id="desktop">
            <style>
                .quick-search1 {
                    float: left;
                    width: 100%;
                    margin-bottom: 10px;
                }

                .quick-search1 form {
                    float: left;
                    width: 100%;
                    padding: 11px;
                    background: #cddbe599;
                    text-align: center;
                    padding-bottom: 19px;

                }

                .quick-search-title1 {
                    color: #044891;
                    font-size: 17px;
                    font-weight: 500;
                    line-height: 1;
                    text-align: left;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-bottom: 15px;
                    padding-bottom: 5px;
                }

                .clear-form1.hide {
                    opacity: 0.5;
                    pointer-events: none;
                    display: inline-block;
                }

                .clear-form1 {
                    color: #387689;
                    float: right;
                    /* background: #387689; */
                    font-size: 12px;
                    padding: 8px 10px;
                    border-radius: 4px;
                    line-height: 1;
                    margin-top: -4px;
                    transition: all ease-in-out 0.25s;
                }

                .msgtoast1 {
                    padding: 0 0 5px;
                    font-size: 14px;
                    font-weight: 400;
                    float: left;
                    width: 100%;
                    text-align: left;
                    color: #e03131;
                    margin-top: -15px;
                    display: none;
                    line-height: 1;
                }

                .quick-search1 form .sec {
                    float: left;
                    width: 48%;
                    position: relative;
                    background: #fff;
                    margin-bottom: 15px;
                    border-radius: 4px;
                }

                .quick-search1 form .sec span {
                    display: block;
                    width: 100%;
                    padding: 7px 0px 7px 10px;
                    text-align: left;
                    font-size: 14px;
                    height: auto;
                    border-radius: 4px;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    position: relative;
                    z-index: 1;
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    border: 1px solid #ccc;
                }

                .quick-search1 form .sec.gift-input,
                .quick-search1 form .sec.date-input {
                    float: right;
                }

                .quick-search1 form .sec {
                    float: left;
                    width: 48%;
                    position: relative;
                    background: #fff;
                    margin-bottom: 15px;
                    border-radius: 4px;
                }

                .quick-search1 form #quick-search-btn {
                    display: inline-block;
                    background: #0c54a0;
                    color: #fff;
                    text-transform: uppercase;
                    font-weight: 500 !important;
                    font-size: 16px !important;
                    padding: 8px 10px;
                    border-radius: 4px;
                    width: 100%;
                    max-width: 414px;
                    border: 0;
                }
            </style>
            <div class="quick-search1 pb-10" style="margin-top: 2rem !important;margin-bottom: 2rem !important;">
                <form id="quick-search-form" autocomplete="off">
                    <h3 class="quick-search-title1">
                        Find Gift For your Business and loved once
                    </h3>
                    <div class="msgtoast1">Select Occasion or Gift Type</div>
                    <div class="sec occassions-input">
                        <input type="hidden" id="occassionsinput">
                        <span id="occassions"><i class="fa fa-star blue-color"
                                aria-hidden="true"></i>&nbsp;Occasions&nbsp;<i class="fa fa-chevron-down"
                                aria-hidden="true" style="padding-left: 56px;"></i></span>
                    </div>
                    <div class="sec gift-input">
                        <input type="hidden" id="gifttypeinput">
                        <span id="gift-type"><i class="fa fa-gift" aria-hidden="true"></i>&nbsp;Gift
                            Types&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"
                                style="padding-left: 56px;"></i></span>
                    </div>
                    <button type="button" id="quick-search-btn">Find Gift</button>
                </form>
                <div class="listPopup" id="occassionsDiv">
                    <h2>Select Occasion <i class="material-icons">close</i></h2>
                    <ul>
                        <li onclick="occFun(event)" data-val="birthday" data-id="giftTypesDiv">Birthday</li>
                        <li onclick="occFun(event)" data-val="anniversary" data-id="giftTypesDiv">Anniversary
                        </li>
                        <li onclick="occFun(event)" data-val="love-n-romance" data-id="giftTypesDiv">Love N
                            Romance</li>
                        <li onclick="occFun(event)" data-val="congratulations" data-id="giftTypesDiv">
                            Congratulations</li>
                        <li onclick="occFun(event)" data-val="house-warming" data-id="giftTypesDiv">House
                            Warming</li>
                        <li onclick="occFun(event)" data-val="get-well-soon" data-id="giftTypesDiv">Get Well
                            Soon</li>
                        <li onclick="occFun(event)" data-val="sympathy-n-funeral" data-id="giftTypesDiv">
                            Sympathy N Funeral</li>
                    </ul>
                </div>
                <div class="listPopup" id="giftTypesDiv">
                    <h2>Select Gift Type <i class="material-icons">close</i></h2>
                    <ul>
                        <li onclick="gifFun(event)" data-val="all-gifts" data-id="occassionsDiv">All Gifts
                        </li>
                        <li onclick="gifFun(event)" data-val="cakes" data-id="occassionsDiv">Cakes</li>
                        <li onclick="gifFun(event)" data-val="flowers" data-id="occassionsDiv">Flowers</li>
                        <li onclick="gifFun(event)" data-val="personalised-gifts" data-id="occassionsDiv">
                            Personalised Gifts</li>
                        <li onclick="gifFun(event)" data-val="chocolates" data-id="occassionsDiv">Chocolates
                        </li>
                        <li onclick="gifFun(event)" data-val="plants" data-id="occassionsDiv">Plants</li>
                        <li onclick="gifFun(event)" data-val="combos" data-id="occassionsDiv">Combos</li>
                        <li onclick="gifFun(event)" data-val="premium-gifts" data-id="occassionsDiv">Premium
                            Gifts</li>
                        <li onclick="gifFun(event)" data-val="balloon-decorations" data-id="occassionsDiv">
                            Balloon Decorations</li>
                        <li onclick="gifFun(event)" data-val="gift-hampers" data-id="occassionsDiv">Gift
                            Hampers</li>
                    </ul>
                </div>
            </div>
        </div>
        <!---------//Desktop new Your New Arrival -------------->
        <section class="categories-carousel best_seller mt-10 mb-5" id="desktop">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>New Arrival </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($new_arrival as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title">
                                                                <a href="#">
                                                            {{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹{{ $na->product_regular_price}}</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------//mobile new Your New Arrival -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>New Arrival </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($new_arrival as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------//mobile new trending offers-------------->
        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_one) }}" alt="Image Description"
                                    style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------//Desktop new Your TRENDING OFFERS -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="desktop">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>TRENDING OFFERS </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($trending_offers as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------//mobile new Your TRENDING OFFERS -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>TRENDING OFFERS </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($trending_offers as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_two) }}" alt="Image Description"
                                    style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------//Desktop new Your BEST SELLER -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="desktop">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>BEST SELLER</h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($best_seller as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------//mobile new Your BEST SELLER -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>TRENDING OFFERS </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($trending_offers as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_three) }}"
                                    alt="Image Description" style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------//Desktop new Your PERSONALIZED GIFTS -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="desktop">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>PERSONALIZED GIFTS</h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($personalised_gifts as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------//mobile new Your PERSONALIZED GIFTS -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>PERSONALIZED GIFTS</h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($personalised_gifts as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_four) }}" alt="Image Description"
                                    style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- START STATIONERY -->
        <div class="gift mt-5 mb-5" style="background-color: #f48a95;margin-top: 28px;margin-bottom: 36px">
            <div class="container-fluid container-gap-remove" style="margin-bottom: 10px;">
                <div class="row border-div">
                    <div class="col-7">
                        <div class="text-left">
                            <h2 class="categories-main-title float-left" style="color: #292b2c;">Elegant Flowers
                            </h2>
                        </div>
                    </div>
                    <div class="col-5 "> <a href="#" class="btn sub-btns float-right">View All <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 pr-0">
                        <a href="#">
                            <div class="image">
                                <img src="images/home/teacherday1-800x800.webp" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7 paddin-left-0">
                        <div class="first-sub-category" id="mobile">
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/delicate-love-6-pink-roses-bunch_2.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/mixed-roses-romantic-bunch_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/love-for-pastel-carnations-bouquet_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                        </div>
                        <div class="second-sub-category" id="mobile">
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/delicate-love-6-pink-roses-bunch_2.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/delicate-love-6-pink-roses-bunch_2.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/delicate-love-6-pink-roses-bunch_2.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                        </div>
                        <div class="first-sub-category" id="desktop">
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/blushing-beauty_1.webp" class="img-fluid" id="imgnit">
                                    <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/timeless-love-red-roses-bouquet_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                        </div>
                        <div class="second-sub-category" id="desktop">
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/sprinkle-of-premium-chocolates_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/rocher-choco-bouquet_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                        </div>
                        <div class="second-sub-category" id="desktop">
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/pretty-in-pink_1.webp" class="img-fluid" id="imgnit">
                                    <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                            <div class="all-product-image">
                                <a href="#">
                                    <img src="images/home/charming-love-roses-arrangement_1.webp" class="img-fluid"
                                        id="imgnit"> <span class="product-name-div">Elegant Flowers</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="desktop">
                    <div class="viewAllSec"><a href="#" class="view-all">View
                            All</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- START STATIONERY -->

        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_five) }}"
                                    alt="Image Description" style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!---------//Desktop new Your MORE GIFTS -------------->
         <section class="categories-carousel best_seller mt-5 mb-5" id="desktop">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>MORE GIFTS</h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($more_gifts as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------//mobile new Your MORE GIFTS -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>MORE GIFTS</h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag owl-customs"
                                id="product-carousel" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        @foreach ($more_gifts as $na)
                                            <div class="owl-item">
                                                <div class="item">
                                                    <div class="product">
                                                        <div class="product_img">
                                                            <a href="#">
                                                                <center><img
                                                                        src="{{ asset('product_image/' . $na->image) }}"
                                                                        alt="product_img1"
                                                                        style="width: 200px; height: 200px;"></center>
                                                            </a>
                                                        </div>
                                                        <div class="custom">
                                                            <a href="#" class="Customizavle-label">Product</a>
                                                        </div>
                                                        <div class="product_info">
                                                            <h6 class="product_title"><a
                                                                    href="#">{{ $na->product_name }}</a></h6>
                                                            <div class="product_price">
                                                                <span class="price">₹1099</span>
                                                                <del>₹1899</del>
                                                                <div class="on_sale"> <span>35% Off</span></div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="big-banner">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single_banner">
                            @if (isset($banners[0]))
                                <img src="{{ asset('images/' . $banners[0]->banner_image_six) }}"
                                    alt="Image Description" style="height: 400px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------mobile new Your Recently Viewed -------------->
        <section class="home-products  mb-5 mt-5" id="desktop">
            <div class="category-header">
                <h2 class="category-title">Your Recently Viewed </h2>
                <a href="#" class="btn new-pro-view-btn">View All</a>
            </div>
            <section class="products-sec">
                <!-- 1 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-double-name-forever-necklace_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 2 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-embossed-ring-pendant_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 3 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-engraved-designer-bracelet_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 4 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-evil-eye-bracelet_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 5 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-mens-engraved-bracelet_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 6 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-name-birth-flower-necklace_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 7 -->
                <div class="productes productes-recently">
                    <a href="#">
                        <figure>
                            <div class="aspect_ration cat-1-3-banner">
                                <img src="images/home/personalised-name-engraved-minimal-ring_1.webp"
                                    alt="Fudge Brownie Cake Half kg">
                            </div>
                            <figcaption class="pro-details">
                                <div class="custom">
                                    <a href="#" class="Customizavle-label">CUSTOMIZABLE</a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="#">Assorted Cadbury.....</a></h6>
                                    <div class="product_price"> <span class="price">₹1099</span>
                                        <del>₹1899</del>
                                        <br>
                                        <div class="on_sale"> <span>35% Off</span>
                                        </div>
                                    </div>
                                    <span class="product-card_rating-sec__34VZH">4.4<i class="fa fa-star"
                                            aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;<div class="on_sale"
                                        style="color:#bfc1c3"> <span>18 Reviews</span> </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- 8 -->
            </section>
        </section>
        <!---------//mobile new Your Recently Viewed -------------->
        <section class="categories-carousel best_seller mt-5 mb-5" id="mobile">
            <div class="container-fluid container-gap-remove">
                <div class="categories-bg">
                    <div class="category-title">
                        <h3>Your Recently Viewed </h3>
                        <a href="#" class="btn new-pro-view-btn">View All</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1 owl-loaded owl-drag recently-customs"
                                id="" data-loop="true" data-dots="false" data-nav="true"
                                data-margin="20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1314px, 0px, 0px); transition: all 0s ease 0s; width: 4133px;">
                                        <div class="owl-item cloned" style="width: 179.857px; margin-right: 8px;">
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
                                                        <h6 class="product_title"><a href="#">Assorted
                                                                Cadbury.....</a></h6>
                                                        <div class="product_price">
                                                            <span class="price">₹1099</span>
                                                            <del>₹155.25</del>
                                                            <br>
                                                            <div class="on_sale"> <span>35% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="pr_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit. Phasellus blandit massa enim. Nullam id varius
                                                                nunc id varius nunc.</p>
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
                                        class="owl-dot active"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    @endsection
