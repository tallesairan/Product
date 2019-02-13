<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for product in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  product module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Product',
    'names'         => 'Products',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Products',
        'sub'   => 'Products',
        'list'  => 'List of products',
        'edit'  => 'Edit product',
        'create'    => 'Create new product'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['Enabled','Disabled'],
            'outofstock_status'   => ['In stock','Out of stock','Pre-order'],
            'weight_class'        => ['Kilogram','Gram','Pound','Ounce'],
            'length_class'        => ['Centimeter','Millimeter','Inch'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'manufacturer_id'            => 'Please enter manufacturer',
        'category_id'                => 'Please enter category',
        'slug'                       => 'Please enter slug',
        'model'                      => 'Please enter model',
        'name'                       => 'Please enter name',
        'price'                      => 'Please enter price',
        'quantity'                   => 'Please enter quantity',
        'status'                     => 'Please select status',
        'description'                => 'Please enter description',
        'return_policy'              => 'Please enter return policy',
        'meta_title'                 => 'Please enter meta title',
        'meta_description'           => 'Please enter meta description',
        'meta_keyword'               => 'Please enter meta keyword',
        'featured'                   => 'Please enter featured',
        'premium'                    => 'Please enter premium',
        'image'                      => 'Please enter image',
        'outofstock_status'          => 'Please select outofstock status',
        'order'                      => 'Please enter order',
        'weight_class'               => 'Please select weight class',
        'length_class'               => 'Please select length class',
        'date_available'             => 'Please select date available',
        'images'                     => 'Please enter images',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
        'deleted_at'                 => 'Please select deleted',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'user_id'                    => 'User id',
        'manufacturer_id'            => 'Manufacturer',
        'category_id'                => 'Category',
        'slug'                       => 'Slug',
        'model'                      => 'Model',
        'name'                       => 'Name',
        'price'                      => 'Price',
        'quantity'                   => 'Quantity',
        'status'                     => 'Status',
        'description'                => 'Description',
        'return_policy'              => 'Return policy',
        'meta_title'                 => 'Meta title',
        'meta_description'           => 'Meta description',
        'meta_keyword'               => 'Meta keyword',
        'featured'                   => 'Featured',
        'premium'                    => 'Premium',
        'image'                      => 'Image',
        'outofstock_status'          => 'Outofstock status',
        'order'                      => 'Order',
        'weight_class'               => 'Weight class',
        'length_class'               => 'Length class',
        'date_available'             => 'Date available',
        'images'                     => 'Images',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated',
        'deleted_at'                 => 'Deleted',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'manufacturer_id'            => ['name' => 'Manufacturer', 'data-column' => 1, 'checked'],
        'category_id'                => ['name' => 'Category', 'data-column' => 2, 'checked'],
        'model'                      => ['name' => 'Model', 'data-column' => 3, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 4, 'checked'],
        'price'                      => ['name' => 'Price', 'data-column' => 5, 'checked'],
        'quantity'                   => ['name' => 'Quantity', 'data-column' => 6, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 7, 'checked'],
        'featured'                   => ['name' => 'Featured', 'data-column' => 8, 'checked'],
        'premium'                    => ['name' => 'Premium', 'data-column' => 9, 'checked'],
        'order'                      => ['name' => 'Order', 'data-column' => 10, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Products',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
