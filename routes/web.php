<?php

// Resource routes  for product
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('product', 'ProductResourceController');
});

// Public  routes for product
Route::get('product/popular/{period?}', 'ProductPublicController@popular');
Route::get('products/', 'ProductPublicController@index');
Route::get('products/{slug?}', 'ProductPublicController@show');


// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
Route::get('category/popular/{period?}', 'CategoryPublicController@popular');
Route::get('products/', 'CategoryPublicController@index');
Route::get('products/{slug?}', 'CategoryPublicController@show');


// Resource routes  for attribute_group
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('attribute_group', 'AttributeGroupResourceController');
});

// Public  routes for attribute_group
Route::get('attribute_group/popular/{period?}', 'AttributeGroupPublicController@popular');
Route::get('products/', 'AttributeGroupPublicController@index');
Route::get('products/{slug?}', 'AttributeGroupPublicController@show');


// Resource routes  for attribute
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('attribute', 'AttributeResourceController');
});

// Public  routes for attribute
Route::get('attribute/popular/{period?}', 'AttributePublicController@popular');
Route::get('products/', 'AttributePublicController@index');
Route::get('products/{slug?}', 'AttributePublicController@show');

