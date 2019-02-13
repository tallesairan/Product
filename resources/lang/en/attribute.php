<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for attribute in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  attribute module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Attribute',
    'names'         => 'Attributes',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Attributes',
        'sub'   => 'Attributes',
        'list'  => 'List of attributes',
        'edit'  => 'Edit attribute',
        'create'    => 'Create new attribute'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'slug'                       => 'Please enter slug',
        'group_id'                   => 'Please enter group',
        'name'                       => 'Please enter name',
        'order'                      => 'Please enter order',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
        'deleted_at'                 => 'Please select deleted',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'slug'                       => 'Slug',
        'group_id'                   => 'Group',
        'name'                       => 'Name',
        'order'                      => 'Order',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'group_id'                   => ['name' => 'Group', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'order'                      => ['name' => 'Order', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Attributes',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
