<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="From Doctor Gifts. /  Business Gifts. / Corporate Gifts. / Promotional Gifts. / Novelties Items.">
    <meta name="keywords" content="From Doctor Gifts. /  Business Gifts. / Corporate Gifts. / Promotional Gifts. / Novelties Items.">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2E4F8F">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2E4F8F">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2E4F8F">
    <!-- SITE TITLE -->
    <title>@yield('title')</title>
    @include('front.layouts.css')
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
        @include('front.layouts.header')
        <!---------------------------------- HEADER END -------------------------------------------->



        @yield('content')




        @include('front.layouts.footer')
        <!-----------------//featute----------------->
    </div>
    <!-- login modal -->
    <div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="logInLabel" aria-hidden="true">
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
                            <input type="tel" placeholder="User Mobile" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group gap-reduce">
                            <input type="password" placeholder="User Password" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="login-otp">Login With OTP</a>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Login</button>
                        </div>
                        <div class="forgot-div">
                            <p>or</p>
                            <a href="javascript:void(0)" class="forgot-password-link" data-toggle="modal" onclick="forgotPassword();"> Forgot Password</a>
                            <p>or</p>
                        </div>
                        <div class="log-in-modal">
                            <a href="javascript:void(0)" class="" data-toggle="modal" onclick="signup();">Create an Account? </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signup modal-->
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" aria-hidden="true">
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
                            <input type="text" placeholder="User Full Name" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="User Email Id" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="User Mobile" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="User Password" class="form-control log-user" id="" name=""><span clas="help-block"></span>
                        </div>
                        <div>
                            <button type="submit" class="login-btn" id="" name="">Sign Up</button>
                        </div>
                        <div class="forgot-div">
                            <p>or</p>
                        </div>
                        <div class="log-in-modal">
                            <a href="javascript:void(0)" class="" data-toggle="modal" onclick="login();">Go to Login </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot modal-->
    <div class="modal fade" id="forGot" tabindex="-1" role="dialog" aria-labelledby="forGotLabel" aria-hidden="true">
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
                            <input type="email" placeholder="User Email Id" class="form-control log-user" id="" name=""><span clas="help-block"></span>
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
    <div class="modal fade" id="bulkBtn" tabindex="-1" role="dialog" aria-labelledby="bulkBtnLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bulk-header text-center">
                    <br>
                    <h5 class="modal-title bulks-news" id="bulkBtnLabel">Contact For Bulk Requirement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="cross"><i class="fa fa-times-circle" style="padding: 7px;"></i></span>
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
                            <input type="text" name="" class="form-control bulk-input" placeholder="Your Good Name" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Mobile Number</label>
                            <input type="tel" name="" class="form-control bulk-input" placeholder="Your Contact Number" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Email</label>
                            <input type="email" name="" class="form-control bulk-input" placeholder="Your Email Id" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Company</label>
                            <input type="text" name="" class="form-control bulk-input" placeholder="Your Company Name" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Budget</label>
                            <input type="text" name="" class="form-control bulk-input" placeholder="Your Budget" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label class="bulk-label" for="">Product Requirement</label>
                            <input type="text" name="" class="form-control bulk-input" placeholder="Your Product Requirement" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="bulk-label" for="">
                                    <input type="checkbox" id="attachmentCheckbox"> &nbsp; &nbsp;Your Attachments (If Available)
                                </label>
                            </div>
                            <!--<label class="bulk-label" for="">Your Attachments (If Available)</label>-->
                            <input type="file" name="" class="form-control bulk-input" id="attachmentInput" required="" style="display: none;">
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
    @include('front.layouts.js')
</body>

</html>