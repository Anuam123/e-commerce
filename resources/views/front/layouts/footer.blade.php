
<style>
    .social_icons li a {
        padding-top: 10px;
    }

    .bottomIcons {
        position: fixed;
        width: 100%;
        bottom: 0;
        text-align: center;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        transition: all ease-in-out 0.5s;
        z-index: 99;
    }

    .bottomIcons.icons-down {
        bottom: 0;
    }

    .bottomIcons.icons-hidden {
        bottom: -100%;
        display: none;
    }
</style>
<script>
    var prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            // Scrolling up or not scrolling
            document.querySelector('.bottomIcons.icons-down').classList.remove('icons-hidden');
        } else {
            // Scrolling down
            document.querySelector('.bottomIcons.icons-down').classList.add('icons-hidden');
        }

        prevScrollPos = currentScrollPos;
    };
</script>
<footer class="mobile-footer text-center pt-5 pb-3" id="mobile" style="background-color: #f8f9fa;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">


                <section>
                    <p>Printmont is an online printing solution provider for small and large businesses. It
                        is a "one-stop" answer for all your business printing needs. We have more than 1000
                        print products to promote your brand. From stationery products to clothing to awards
                        to drinkware, we have a wide range of products to enhance your business. You can get
                        a wide scope of business products designed, printed, and delivered to you anywhere
                        in India! PrintMont offers hundreds of ready-to-use designs that can be easily
                        customized to your needs. PrintMont simplifies the complex print procurement, making
                        it simple and hassle-free! Anybody with the enthusiasm, desire, and soul to maintain
                        a business should approach personalized marketing products that assist them in
                        connecting with clients, professionally and affordably. We have pursued that vision
                        from the very beginning – and we always will.</p>
                    <span id="dots">...</span>
                    <p id="more" class="hidden">
                        Hidden Text Printmont is an online printing solution provider for small and large
                        businesses. It is a "one-stop" answer for all your business printing needs. We have
                        more than 1000 print products to promote your brand. From stationery products to
                        clothing to awards to drinkware, we have a wide range of products to enhance your
                        business. You can get a wide scope of business products designed, printed, and
                        delivered to you anywhere in India! PrintMont offers hundreds of ready-to-use
                        designs that can be easily customized to your needs. PrintMont simplifies the
                        complex print procurement, making it simple and hassle-free! Anybody with the
                        enthusiasm, desire, and soul to maintain a business should approach personalized
                        marketing products that assist them in connecting with clients, professionally and
                        affordably. We have pursued that vision from the very beginning – and we always
                        will.
                    </p>
                    <button id="toggleReadMore">Read more</button>
                </section>

                <script>
                    var moreText = document.getElementById("more");
                    var dots = document.getElementById("dots");
                    var toggleButton = document.getElementById("toggleReadMore");

                    toggleButton.addEventListener("click", function() {
                        if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            toggleButton.textContent = "Read more";
                            moreText.classList.add("hidden");
                        } else {
                            dots.style.display = "none";
                            toggleButton.textContent = "Read less";
                            moreText.classList.remove("hidden");
                        }
                    });
                </script>

                <style>
                    .hidden {
                        display: none;
                    }

                    section {
                        text-align: left;
                        position: relative;
                    }

                    #toggleReadMore {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        margin: -10px;
                        background: #0c54a0d4;
                        color: #fff;
                    }
                </style>


            </div>
        </div>
    </div>
</footer>

<!-----------------featute----------------->
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
                                <p>3398, Bagichi Acchi ji, Bara Hindu Rao, Near Azad Market, Delhi - 110006
                                </p>
                            </li>
                            <li> <i class="fa fa-envelope"></i>
                                <p><a href="maito: info@printmont.com"
                                        class="mail-to">info@printmont.com</a>
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
                            <li><a href="login.html">Login/ Register</a>
                            </li>
                            <li><a href="#">Wishlist</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="acc.html">My Account</a>
                            </li>
                            <li><a href="about.html">About Us</a>
                            </li>
                            <li><a href="#">My Wallet</a>
                            </li>



                            <li><a href="#"><button class="subscribr-submit">Bulk
                                        Order</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" style="border-right: 1px solid #fff;">
                    <div class="widget">
                        <h6 class="widget_title">Help</h6>
                        <ul class="widget_links">
                            <li><a href="faqs.html">Orders FAQ</a>
                            </li>
                            <li><a href="faqs.html">Artwork FAQ</a>
                            </li>
                            <li><a href="faqs.html">Shipping FAQ</a>
                            </li>
                            <li><a href="faqs.html">Payment FAQ</a>
                            </li>
                            <li><a href="shipping.html">Shipping Policy</a>
                            </li>
                            <li><a href="return.html">Returned & Refund Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="widget">
                        <h6 class="widget_title">Subscribe</h6>
                        <form action="#" method="post" id="#" class="subscribe">
                            <div class="subscribe-main">
                                <input name="email" id="email" class="subscribe-field"
                                    type="email" placeholder="Email Address" required
                                    maxlength="50"> <span class="help-block" id=""></span>
                                <input type="submit" name="submit" class="subscribr-submit"
                                    value="Subscribe!" />
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <h6 class="widget_title_2">Follow us on</h6>
                        <ul class="social_icons text-center text-lg-center">
                            <li><a href="#" class="sc_facebook"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="sc_twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="sc_google"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="sc_instagram"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#" class="sc_twitter"
                                    style="background: #db1818 !important;"><i
                                        class="fa fa-youtube-play"></i></a>
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
    <div class="footer_top small_pt" style="padding: 0px;">
        <div class="container-fluid text-center">
            <p class="text-center" style="color:#fff;font-size: 18px;">100 % safe and Secure payments.
            </p>

        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center text-lg-left text-white">© Copyright 2019 - 2023
                        Printmont.com . All Rights Reserved .</p>
                </div>
                <div class="col-lg-4 text-center">
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
                <div class="accordion md-accordion" id="accordionEx" role="tablist"
                    aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                aria-expanded="false" aria-controls="collapseOne1" class="collapsed"
                                onclick="toggleIcon(this)">
                                <h5 class="recent-h5 mb-0">Why Us? <i id="collapseIcon"
                                        class="fa fa-plus rotate-icon float-right"></i></h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse" role="tabpanel"
                            aria-labelledby="headingOne1" data-parent="#accordionEx" style="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="about-mob-div text-justify">
                                            <h4>About Printmont</h4>
                                            <p>Printmont is an online printing solution provider for Small
                                                and Large business. It is a "one-stop" answer for all your
                                                business printing needs. We have more than 1000 print
                                                products to promote your brand. From stationery product to
                                                clothing to awards to drinkware we have a wide range of
                                                products to enhance your business. You can get a wide scope
                                                of business products designed, printed and conveyed to you
                                                anywhere in India! PrintMont offers 100s of ready-to-use
                                                designs which can be easily customized your needs. PrintMont
                                                improves the mind-boggling print obtainment, making it
                                                simple and bother free! Anybody with the enthusiasm, desire
                                                and soul to maintain a business ought to approach
                                                personalized marketing products that assist them with
                                                interfacing with clients, expertly and moderately. We have
                                                sought after that vision from the very beginning – and we
                                                always will.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                </div>

                <script>
                    function toggleIcon(element) {
                        var icon = element.querySelector('.rotate-icon');
                        if (element.getAttribute('aria-expanded') === 'true') {
                            icon.classList.remove('fa-minus');
                            icon.classList.add('fa-plus');
                        } else {
                            icon.classList.remove('fa-plus');
                            icon.classList.add('fa-minus');
                        }
                    }
                </script>




                <div class="mobile-footer-upper-part">

                    <ul>

                        <li><a href="contact-us.html">Contact Us</a>
                        </li>
                        <li><a href="quicklinks.html">Quick Links</a>
                        </li>
                        <li><a href="helpnow.html">Help Now</a>
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
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24"
                            aria-hidden="true">
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
                        <li><a href="#" class="sc_twitter"
                                style="background: #db1818 !important;"><i
                                    class="fa fa-youtube-play"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="mobile-copy">
                    <p class="text-center">© Copyright 2019 - 2023 Printmont.com . All Rights Reserved .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!------------mobile footer------------>

<div class="sticky-container">
    <div class="button-container">
        <a href="#" data-toggle="modal" onclick="bulk();"><i
                class="icofont-question-circle"></i> <span class="bulk-cust">Bulk Orders</span></a>
    </div>
</div>

<!-- mobile footer bottom menu -->
<div class="bottomIcons" id="desktop">
    <ul>
        <li>
            <a rel="index.php" class="active">
                <span>
                    <i class="icofont-home"></i>
                </span>Home </a>
        </li>
        <li>
            <a href="#">
                <span>
                    <i class="icofont-listine-dots"></i>
                </span>New Today </a>
        </li>
        <li>
            <a href="acc.html">
                <span>
                    <i class="icofont-user-alt-3"></i>
                </span>Account </a>
        </li>
        <li>
            <a href="helpcenter.html" id="fnpChat">
                <span>
                    <i class="icofont-question-circle"></i>
                </span>Help Center </a>
        </li>
    </ul>
</div>

