<?php

namespace Figmax;

use DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('attribute_groups')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'product.attribute_group.view',
                'name'      => 'View AttributeGroup',
            ],
            [
                'slug'      => 'product.attribute_group.create',
                'name'      => 'Create AttributeGroup',
            ],
            [
                'slug'      => 'product.attribute_group.edit',
                'name'      => 'Update AttributeGroup',
            ],
            [
                'slug'      => 'product.attribute_group.delete',
                'name'      => 'Delete AttributeGroup',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/product/attribute_group',
                'name'        => 'AttributeGroup',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/product/attribute_group',
                'name'        => 'AttributeGroup',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'attribute_group',
                'name'        => 'AttributeGroup',
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
                'module'    => 'AttributeGroup',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'product.attribute_group.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
