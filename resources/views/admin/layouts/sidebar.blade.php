<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar" style="border-bottom-style: solid;">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><span class="logo-text hide-on-med-and-down"><img src="{{ asset('app-assets/images/logo/logo.png')}}" alt="materialize logo" style="width:150px; height:50px; margin-top:-15px;"></span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion" style="color:black;">

        <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('adminDashboard') }}"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Documentation">Dashboard</span></a>
        </li>
        <span style="margin-left:25px;">Menu</span>

        <!-- <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
        </li>


        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Saurabh</span></a>
        </li> -->

        @can('menus')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">menu_open</i><span class="menu-title" data-i18n="Dashboard">Menus</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('category.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Category</span></a>
                    </li>
                </ul>
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('subcategory.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Sub Category</span></a>
                    </li>
                    <li><a href="{{ route('subsubcategory.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Sub Sub Category</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan

        @can('Product-Attributes')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Product Attributes</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('product_attribute_type.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Attribute Types</span></a>
                    </li>

                    <li><a href="{{ route('product_attribute.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Attributes</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('Home-Slider')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">image</i><span class="menu-title" data-i18n="Dashboard">Home Slider</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('home_slider.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Slider</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan

        @can('Home-Banner')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">image</i><span class="menu-title" data-i18n="Dashboard">Home Banner</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('home_banner.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Banner</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan


        @can('Products')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">shop</i><span class="menu-title" data-i18n="Dashboard">Products</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{ route('add_product.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Products</span></a>
                    </li>
                    <li><a href="{{ route('product_review.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Product Reviews</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan

        @can('Orders-Coupons')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">shopping_cart</i><span class="menu-title" data-i18n="Dashboard">Orders & Coupons</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Coupons</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">All Orders</span></a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan

        {{-- @can('Users')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="Dashboard">Users</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">All Users</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan --}}


        @can('Setting')
        <li><a href="#"><i class="material-icons">brightness_high</i><span data-i18n="Modern">Setting</span></a>
        </li>
        @endcan

        @can('Orders')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">shopping_cart</i><span class="menu-title" data-i18n="Dashboard">Orders</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">All Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Pending Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Processing Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Delivered Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Completed Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Declined Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Refund Orders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Total Sold Orders</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('Customers')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">person</i><span class="menu-title" data-i18n="Dashboard">Customers</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Customes List</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Customers Default List</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        {{-- @can('Manage-Categories')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">shopping_cart</i><span class="menu-title" data-i18n="Dashboard">Manage Categories</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Main Category</span></a>
                    </li>

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Sub Category</span></a>
                    </li>

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Child Category</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan --}}

        @can('Product-Discussion')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">assignment</i><span class="menu-title" data-i18n="Dashboard">Product Discussion</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Product Reviews</span></a>
                    </li>

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add Product Reviews</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('bookmark')
        <li class="bold"><a class="waves-effect waves-cyan " href="#" target="_blank"><i class="material-icons">bookmark</i><span class="menu-title" data-i18n="Support">Set Coupons</span></a>
        </li>
        @endcan

        @can('General-Settings')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">build</i><span class="menu-title" data-i18n="Dashboard">General Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Logo </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Fevicon </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Loader </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Website Contents </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Footer </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Login Page Background </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Error Banner </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Website Maintenance </span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        {{-- @can('Home-Page-Settings')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="Dashboard">Home Page Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">



                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Sliders</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Services</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan --}}

        {{-- @can('Menu-Page-Settings')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">art_track</i><span class="menu-title" data-i18n="Dashboard">Menu Page Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Contact Us Page</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern"> Other Pages </span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan --}}

        @can('FAQ')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Dashboard">FAQ</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">All FAQ</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Add New FAQ </span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Categories </span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('Email-Settings')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">local_post_office</i><span class="menu-title" data-i18n="Dashboard">Email-Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Email Template</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Email Configurations</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan


        @can('Social-Settings')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">navigation</i><span class="menu-title" data-i18n="Dashboard">Social Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Social Links</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('SEO-Tools')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Dashboard">SEO Tools</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Google Analytics</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Facebook Pixel</span></a>
                    </li>
                    <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Website Meta Keywords</span></a>
                    </li>

                </ul>
            </div>
        </li>
        @endcan

        @can('Bulk-Order')
        <li><a href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Bulk Order</span></a>
        </li>
        @endcan

        @can('User-Management')
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">person</i><span class="menu-title" data-i18n="Dashboard">User Management</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    @can('Manage-Users')
                    <li><a href="{{ route('users.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Manage Users</span></a>
                    </li>
                    @endcan

                    @can('Manage-Role')
                    <li><a href="{{ route('roles.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Manage Role</span></a>
                    </li>
                    @endcan

                </ul>
            </div>
        </li>
        @endcan

        @can('clear-Cache')
        <li><a href="#"><i class="material-icons">sync</i><span data-i18n="Modern">clear Cache</span></a>
        </li>
        @endcan
        <br><br><br><br><br><br><br><br><br><br>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
