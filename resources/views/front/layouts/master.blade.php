<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="From Doctor Gifts. /  Business Gifts. / Corporate Gifts. / Promotional Gifts. / Novelties Items.">
    <meta name="keywords"
        content="From Doctor Gifts. /  Business Gifts. / Corporate Gifts. / Promotional Gifts. / Novelties Items.">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2E4F8F">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2E4F8F">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2E4F8F">
    <!-- SITE TITLE -->
    <title>@yield('title')</title>
    @include('front.layouts.css')
    </style>
</head>

<body>
    <div class="wrapper">
        <!---------------------------------- LOADER ----------------------------------------------->
        <div class="preloader">
            <div class="lds-ellipsis"> <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!---------------------------------- END LOADER -------------------------------------------->
        <!---------------------------------- END LOADER -------------------------------------------->
        <!---------------------------------- Header Start -------------------------------------------->
        <!---------------------------------- DESKTOP START HEADER ---------------------------------->

        @include('front.layouts.header')

        <!---------------------------------- HEADER END -------------------------------------------->



        @yield('content')



        <!-----------------//footer----------------->
        @include('front.layouts.footer')
        <!-----------------//footer----------------->
    </div>


    <!-- login modal -->
    <div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="logInLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title loginshowerror" id="logInLabel">Login to Printmont</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="userloginform">
                        <div class="form-group">
                            <input type="tel" placeholder="User Mobile" class="form-control log-user" id=""
                                name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group gap-reduce">
                            <input type="password" placeholder="User Password" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="login-otp">Login With OTP</a>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Login</button>
                        </div>
                        <div class="forgot-div">
                            <p>or</p>
                            <a href="javascript:void(0)" class="forgot-password-link" data-toggle="modal"
                                onclick="forgotPassword();"> Forgot Password</a>
                            <p>or</p>
                        </div>
                        <div class="log-in-modal">
                            <a href="javascript:void(0)" class="" data-toggle="modal" onclick="signup();">Create
                                an Account? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signup modal-->
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title loginshowerror" id="signUpLabel">SignUp with Printmont</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="userloginform">
                        <div class="form-group">
                            <input type="text" placeholder="User Full Name" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="User Email Id" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="User Mobile" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="User Password" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Sign
                                Up</button>
                        </div>
                        <div class="forgot-div">
                            <p>or</p>
                        </div>
                        <div class="log-in-modal">
                            <a href="javascript:void(0)" class="" data-toggle="modal" onclick="login();">Go to
                                Login </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot modal-->
    <div class="modal fade" id="forGot" tabindex="-1" role="dialog" aria-labelledby="forGotLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title loginshowerror" id="forGotLabel">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="userloginform">
                        <div class="form-group">
                            <input type="email" placeholder="User Email Id" class="form-control log-user"
                                id="" name=""><span clas="help-block"></span>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- bulk modal-->
    <div class="modal fade" id="bulkBtn" tabindex="-1" role="dialog" aria-labelledby="bulkBtnLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bulk-header text-center">
                    <br>
                    <h5 class="modal-title bulks-news" id="bulkBtnLabel">Contact For Bulk Requirement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="cross"><i class="fa fa-times-circle"
                                style="padding: 7px;"></i></span>
                    </button>
                    <center>
                        <style>
                            .mobile-contact_infos {
                                text-align: center;
                            }

                            .mobile-contact_infos li {
                                display: inline-block;
                                text-align: left;
                            }
                        </style>
                        <ul class="mobile-contact_infos">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:+91-9811003511">+91-9811003511</a>
                            </li>
                        </ul>
                    </center>
                </div>
                <div class="modal-body">
                    <form class="bulk-form" action="#" method="POST">
                        <div class="form-group">
                            <label class="bulk-label" for="">Full Name</label>
                            <input type="text" name="" class="form-control bulk-input"
                                placeholder="Your Good Name" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Mobile Number</label>
                            <input type="tel" name="" class="form-control bulk-input"
                                placeholder="Your Contact Number" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Email</label>
                            <input type="email" name="" class="form-control bulk-input"
                                placeholder="Your Email Id" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Company</label>
                            <input type="text" name="" class="form-control bulk-input"
                                placeholder="Your Company Name" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Budget</label>
                            <input type="text" name="" class="form-control bulk-input"
                                placeholder="Your Budget" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Product Requirement</label>
                            <input type="text" name="" class="form-control bulk-input"
                                placeholder="Your Product Requirement" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="bulk-label" for="">
                                    <input type="checkbox" id="attachmentCheckbox"> &nbsp; &nbsp;Your
                                    Attachments (If Available)
                                </label>
                            </div>
                            <!--<label class="bulk-label" for="">Your Attachments (If Available)</label>-->
                            <input type="file" name="" class="form-control bulk-input"
                                id="attachmentInput" required="" style="display: none;">
                            <span class="help-block"></span>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('attachmentCheckbox').addEventListener('change', function() {
            var attachmentInput = document.getElementById('attachmentInput');
            attachmentInput.style.display = this.checked ? 'block' : 'none';
        });
    </script>
    <!-- offer pop modal -->
    <!-- <div class="modal fade" id="myModal" style="display:none;"> -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content offer-bg-205">
                <div class="modal-header">
                    <button type="button" class="close offer-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="offer-close"><i class="icofont-close-circled"
                                style="padding-right: 10px;"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/offer-img.png">
                </div>
            </div>
        </div>
    </div>

    <!-- //mobile footer bottom menu -->
    <!-- whats app -->
    <!--<a id="whatsapp" title="Whats App" href="https://wa.me/919811003511" style="display: inline;"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>-->
    <!-- back to top --> <a href="#" class="scrollup" style="display: none;"><i
            class="fa fa-chevron-up"></i></a>
    <!-- bulk -->
    <div class="sticky-container">
        <div class="button-container">
            <a href="#" data-toggle="modal" onclick="bulk();"><i class="icofont-question-circle"></i>
                <span class="bulk-cust">Bulk Orders</span></a>
        </div>
    </div>
    </div>
    <!-- //wrapper-div -->
    <!-- Latest jQuery -->
    <script src="{{ asset('front_assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
    <!-- popper min js -->
    <script src="{{ asset('front_assets/js/popper.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('front_assets/js/slick.min.js') }}"></script>
    <!-- mobile login signup part -->
    <script src="https://alpinetechnologies.xyz/fnp/cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <!-- scripts js -->
    <script src="{{ asset('front_assets/js/scripts.js') }}"></script>
    <!-- mobile login signup part -->
    <script>
        var app = new Vue({
            el: '.header__navbar',
            data: {
                show: false
            }
        })
    </script>
    <script>
        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('.bottom_header').addClass('sticky');
            } else {
                $('.bottom_header').removeClass('sticky');
            }
        });
        /*Scroll to top when arrow up clicked END*/
    </script>
    <!-- cross icon -->
    <script>
        function closeNavs() {
            $("#new-menu").trigger("click");

        }
    </script>
    <!-- category carousel -->
    <script>
        $('.client_logo').owlCarousel({
            loop: true,
            margin: 5,
            loop: true,
            margin: 10,
            autoplay: true,
            items: 5,
            smartSpeed: 3000,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                480: {
                    items: 5
                },
                767: {
                    items: 5,
                    nav: true,
                    autoPlay: true,
                    loop: true
                },
                979: {
                    items: 5,
                    nav: false,
                    autoPlay: true,
                    loop: true
                },
                1000: {
                    items: 8,
                    nav: true,
                    autoPlay: true,
                    loop: true
                }
            }
        });
    </script>
    <script>
        window.addEventListener('load', function() {
            $('.bottomIcons').removeClass('beforeLoad');
        })
        document.addEventListener("DOMContentLoaded", function() {
            var mypath = window.location.pathname;
            /*hide show bottom icons on scroll*/
            var didScroll;
            var lastScrollTop = 0;
            var delta = 5;
            var navbarHeight1 = $('.bottomIcons').outerHeight();
            $(window).scroll(function(event) {
                didScroll = true;
            });
            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 10);

            function hasScrolled() {
                var st = $(this).scrollTop();
                if (Math.abs(lastScrollTop - st) <= delta)
                    return;
                if (st > lastScrollTop && st > navbarHeight1) {
                    $('.bottomIcons').addClass('icons-down');
                    $('.social-proof').addClass('icons-down');
                } else {
                    if (st + $(window).height() < $(document).height()) {
                        $('.bottomIcons').removeClass('icons-down');
                        $('.social-proof').removeClass('icons-down');
                    }
                }
                lastScrollTop = st;
            }
            //click events
            var $window = $(window),
                previousScrollTop = 0; //, scrollLock = true;
            $('.bottomIcons li a,.filter li a').on('click', function() {
                $('.bottomIcons li a,.filter li a').removeClass('active');
                $(this).addClass('active');
                var openbottomcategories = $(this).attr('rel');
                if (openbottomcategories === "#categorySlide") {
                    var newurl = window.location.hash != "" ? window.location.hash +
                        "&promo=bottom_sb_cat" : '?promo=bottom_sb_cat';
                    window.history.pushState({
                        path: newurl
                    }, '', newurl);
                    $('body').addClass('overflowHidden');
                    $('.bottomCategories').addClass('open');
                    $('.bottomCategories .categoryList').addClass('show');
                    $('.categoriesDisplay:first img').each(function() {
                        var dataSrc = $(this).attr('data-src');
                        $(this).attr("src", dataSrc);
                    });

                } else if (openbottomcategories === "index.html") {
                    var myhost = window.location.hostname;
                    if (mypath === "index.html") {
                        var newurl = 'index7239.html?promo=bottom_sb_home';
                        window.history.pushState({
                            path: newurl
                        }, '', newurl);
                    } else {
                        window.location.replace("https://" + myhost + "?promo=bottom_sb_home");
                    }
                    //scrollLock = false;
                    $('.bottomCategories').removeClass('open');
                    $('.bottomCategories .categoryList').removeClass('show');
                    $('body').removeClass('overflowHidden');
                } else {
                    //scrollLock = false;
                    $('.bottomCategories').removeClass('open');
                    $('.bottomCategories .categoryList').removeClass('show');
                }
            });
            //back button
            if (mypath !== "index.html") {
                $('.bottomIcons li a').removeClass('active');

            }
            //close widget on search form open
            $(document).on('focus', 'input.main-search', function() {
                //scrollLock = false;
                $('.bottomCategories .categoryList').removeClass('show');
                $('.bottomCategories').removeClass('open');

                if (mypath !== "index.html") {
                    $('.bottomIcons li a').removeClass('active');
                } else {
                    $('.bottomIcons li a').removeClass('active');
                    $('.bottomIcons li:first-child a').addClass('active');
                }
            });
            //back Button
            window.onpopstate = function() {
                $('body').removeClass('overflowHidden');
                $('.bottomCategories').removeClass('open');
                $('.bottomCategories .categoryList').removeClass('show');
                $('.bottomIcons li a,.filter li a').removeClass('active');
                if (mypath === "index.html") {

                    $('.bottomIcons li:first-child a,.filter li:first-child a').addClass('active');

                }
                if ($('.search-fullpage-popup').hasClass('show') && $('body').hasClass('hidden')) {
                    $('#main-search').blur();
                    $('.search-fullpage-popup').removeClass('show');
                    $('body').removeClass('hidden');
                }
                if ($('.main-header').hasClass('full-search') && $('body').hasClass('hidden')) {
                    $('#main-search').blur();
                    $('body').removeClass('hidden');
                    $('.main-header').removeClass('full-search');
                }
            }

        });
    </script>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
    </script>
    <script>
        function login() {
            $('.modal').modal('hide');
            // $('#login-form')[0].reset();
            $('#logIn').modal('show');
        }

        function forgotPassword() {
            $('.modal').modal('hide');
            // $('#login-form')[0].reset();
            $('#forGot').modal('show');
        }

        function signup() {
            $('.modal').modal('hide');
            // $('#login-form')[0].reset();
            $('#signUp').modal('show');
        }

        function bulk() {
            $('.modal').modal('hide');
            $('#bulkBtn').modal('show');
        }
    </script>
    <script>
        $(".owl-customs").owlCarousel({
          items: 2,
          margin: 10,
          slideBy: 2,
          smartSpeed: 2000,
          responsive: {
            480: {
              items: 2
            },
            767: {
              items: 3,
              nav: true,
              autoPlay: true,
              loop: false // Check if there are more than 3 items
            },
            979: {
              items: 3,
              nav: false,
              autoPlay: true,
              loop: false // Check if there are more than 3 items
            },
            1000: {
              items: 5,
              nav: true,
              autoPlay: true,
              loop: false // Check if there are more than 5 items
            }
          }
        });
      </script>
    <script>
        $(".recently-customs").owlCarousel({
            items: 2,
            margin: 8,
            loop: true,
            slideBy: 2,
            smartSpeed: 2000,
            responsive: {
                480: {
                    items: 2
                },
                767: {
                    items: 3,
                    nav: true,
                    autoPlay: true,
                    loop: true
                },
                979: {
                    items: 4,
                    nav: false,
                    autoPlay: true,
                    loop: true
                },
                1000: {
                    items: 7,
                    nav: true,
                    autoPlay: true,
                    loop: true
                }
            }
        });
    </script>
    <script>
        $(window).on('load', function() {
            var delayMs = 1500; // delay in milliseconds

            setTimeout(function() {
                $('#myModal').modal('show');
            }, delayMs);
        });
    </script>
    <script>
        $(document).on("click", ".qty-plus", function() {
            var input = $(this).prev("input");
            var step =
                typeof input.attr("step") == "undefined" ? 1 : parseInt(input.attr("step"));
            var max =
                typeof input.attr("max") == "undefined" ?
                false :
                parseInt(input.attr("max"));
            var value = parseInt(input.val());
            if (isNaN(max)) {
                max = false;
            }
            value += step;
            if (max && value > max) {
                value = max;
            }
            input.val(value);
            input.trigger("change");
        });

        $(document).on("click", ".qty-minus", function() {
            var input = $(this).next("input");
            var step =
                typeof input.attr("step") == "undefined" ? 1 : parseInt(input.attr("step"));
            var min =
                typeof input.attr("min") == "undefined" ? 1 : parseInt(input.attr("min"));
            if (isNaN(min)) {
                min = 1;
            }
            var value = parseInt(input.val());
            value -= step;
            if (value < min) {
                value = min;
            }
            input.val(value);
            input.trigger("change");
        });
    </script>
</body>

</html>
