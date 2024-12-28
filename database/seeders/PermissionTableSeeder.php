<?php



namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;



class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $permissions = [

            'menus',
            'category-create-btn',
            'category-edit',
            'category-delete',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',
            'subsubcategory-create',
            'subsubcategory-edit',
            'subsubcategory-delete',
            'Product-Attributes',
            'productAttribute-create',
            'productAttribute-edit',
            'productAttribute-delete',
            'Home-Slider',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'Home-Banner',
            'banner-create',
            'banner-edit',
            'banner-delete',
            'Products',
            'Orders-Coupons',
            'Users',
            'Shipping-Pincodes',
            'Setting',
            'Orders',
            'Customers',
            'Manage-Categories',
            'Product-Discussion',
            'bookmark',
            'General-Settings',
            'Home-Page-Settings',
            'Menu-Page-Settings',
            'FAQ',
            'Email-Settings',
            'Social-Settings',
            'SEO-Tools',
            'Bulk-Order',
            'User-Management',
            'Manage-Users',
            'Manage-Role',
            'role-create',
            'role-edit',
            'role-delete',
            'clear-Cache',
            'create-user-btn',
            'user-view',
            'user-edit',
            'user-delete'
        ];



        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
