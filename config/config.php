<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'figmax',

    /*
     * Package.
     */
    'package'   => 'product',

    /*
     * Modules.
     */
    'modules'   => ['product', 
'category', 
'attribute_group', 
'attribute'],

    'product'       => [
        'model' => [
            'model'                 => \Figmax\Product\Models\Product::class,
            'table'                 => 'products',
            'presenter'             => \Figmax\Product\Repositories\Presenter\ProductPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'manufacturer_id',  'category_id',  'slug',  'model',  'name',  'price',  'quantity',  'status',  'description',  'return_policy',  'meta_title',  'meta_description',  'meta_keyword',  'featured',  'premium',  'image',  'outofstock_status',  'order',  'weight_class',  'length_class',  'date_available',  'images',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/product',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Figmax',
            'package'   => 'Product',
            'module'    => 'Product',
        ],

    ],

    'category'       => [
        'model' => [
            'model'                 => \Figmax\Product\Models\Category::class,
            'table'                 => 'categories',
            'presenter'             => \Figmax\Product\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'parent_id',  'name',  'slug',  'status',  'meta_title',  'meta_description',  'meta_keyword',  'image',  'order',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/category',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Figmax',
            'package'   => 'Product',
            'module'    => 'Category',
        ],

    ],

    'attribute_group'       => [
        'model' => [
            'model'                 => \Figmax\Product\Models\AttributeGroup::class,
            'table'                 => 'attribute_groups',
            'presenter'             => \Figmax\Product\Repositories\Presenter\AttributeGroupPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'slug',  'name',  'order',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/attribute_group',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Figmax',
            'package'   => 'Product',
            'module'    => 'AttributeGroup',
        ],

    ],

    'attribute'       => [
        'model' => [
            'model'                 => \Figmax\Product\Models\Attribute::class,
            'table'                 => 'attributes',
            'presenter'             => \Figmax\Product\Repositories\Presenter\AttributePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'slug',  'group_id',  'name',  'order',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/attribute',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Figmax',
            'package'   => 'Product',
            'module'    => 'Attribute',
        ],

    ],
];
