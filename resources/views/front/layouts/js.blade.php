<script>
    document.getElementById('attachmentCheckbox').addEventListener('change', function() {
        var attachmentInput = document.getElementById('attachmentInput');
        attachmentInput.style.display = this.checked ? 'block' : 'none';
    });
</script>
<a href="#" class="scrollup" style="display: none;"><i class="fa fa-chevron-up"></i></a>
<!-- bulk -->
<div class="sticky-container">
    <div class="button-container">
        <a href="#" data-toggle="modal" onclick="bulk();"><i class="icofont-question-circle"></i> <span
                class="bulk-cust">Bulk Orders</span></a>
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
