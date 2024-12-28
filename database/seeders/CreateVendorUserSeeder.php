<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class CreateVendorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Vendor::create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
            'is_vendor' => 1,
            'password' => bcrypt('123456')
        ]);
    }
}
