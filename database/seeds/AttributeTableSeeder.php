<?php

namespace Figmax;

use DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('attributes')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'product.attribute.view',
                'name'      => 'View Attribute',
            ],
            [
                'slug'      => 'product.attribute.create',
                'name'      => 'Create Attribute',
            ],
            [
                'slug'      => 'product.attribute.edit',
                'name'      => 'Update Attribute',
            ],
            [
                'slug'      => 'product.attribute.delete',
                'name'      => 'Delete Attribute',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/product/attribute',
                'name'        => 'Attribute',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/product/attribute',
                'name'        => 'Attribute',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'attribute',
                'name'        => 'Attribute',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Product',
                'module'    => 'Attribute',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'product.attribute.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
