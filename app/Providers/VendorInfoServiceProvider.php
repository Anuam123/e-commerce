<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Vendor;

class VendorInfoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $vendor_info = Vendor::first();
        //dd($vendor_info);
        view()->share('vendor_info', $vendor_info);
    }

    public function register()
    {
        //
    }
}
