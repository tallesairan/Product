<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for category in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  category module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Category',
    'names'         => 'Categories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Categories',
        'sub'   => 'Categories',
        'list'  => 'List of categories',
        'edit'  => 'Edit category',
        'create'    => 'Create new category'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['Enabled','Disabled'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user',
        'parent_id'                  => 'Please enter parent',
        'name'                       => 'Please enter name',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'meta_title'                 => 'Please enter meta title',
        'meta_description'           => 'Please enter meta description',
        'meta_keyword'               => 'Please enter meta keyword',
        'image'                      => 'Please enter image',
        'order'                      => 'Please enter order',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
        'deleted_at'                 => 'Please select deleted',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'user_id'                    => 'User',
        'parent_id'                  => 'Parent',
        'name'                       => 'Name',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'meta_title'                 => 'Meta title',
        'meta_description'           => 'Meta description',
        'meta_keyword'               => 'Meta keyword',
        'image'                      => 'Image',
        'order'                      => 'Order',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated',
        'deleted_at'                 => 'Deleted',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'parent_id'                  => ['name' => 'Parent', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 3, 'checked'],
        'order'                      => ['name' => 'Order', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Categories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
