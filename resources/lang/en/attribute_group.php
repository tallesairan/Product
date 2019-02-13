<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for attribute_group in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  attribute_group module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'AttributeGroup',
    'names'         => 'AttributeGroups',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'AttributeGroups',
        'sub'   => 'AttributeGroups',
        'list'  => 'List of attribute_groups',
        'edit'  => 'Edit attribute_group',
        'create'    => 'Create new attribute_group'
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
        'name'                       => 'Name',
        'order'                      => 'Order',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated',
        'deleted_at'                 => 'Deleted',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'order'                      => ['name' => 'Order', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'AttributeGroups',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
