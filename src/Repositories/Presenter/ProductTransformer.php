<?php

namespace Figmax\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ProductTransformer extends TransformerAbstract
{
    public function transform(\Figmax\Product\Models\Product $product)
    {
        return [
            'id'                => $product->getRouteKey(),
            'key'               => [
                'public'    => $product->getPublicKey(),
                'route'     => $product->getRouteKey(),
            ], 
            'id'                => $product->id,
            'user_id'           => $product->user_id,
            'manufacturer_id'   => $product->manufacturer_id,
            'category_id'       => $product->category_id,
            'slug'              => $product->slug,
            'model'             => $product->model,
            'name'              => $product->name,
            'price'             => $product->price,
            'quantity'          => $product->quantity,
            'status'            => $product->status,
            'description'       => $product->description,
            'return_policy'     => $product->return_policy,
            'meta_title'        => $product->meta_title,
            'meta_description'  => $product->meta_description,
            'meta_keyword'      => $product->meta_keyword,
            'featured'          => $product->featured,
            'premium'           => $product->premium,
            'image'             => $product->image,
            'outofstock_status' => $product->outofstock_status,
            'order'             => $product->order,
            'weight_class'      => $product->weight_class,
            'length_class'      => $product->length_class,
            'date_available'    => $product->date_available,
            'images'            => $product->images,
            'created_at'        => $product->created_at,
            'updated_at'        => $product->updated_at,
            'deleted_at'        => $product->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$product->getPublicKey()),
                'user'      => guard_url('product/product/'.$product->getRouteKey()),
            ], 
            'status'            => trans('app.'.$product->status),
            'created_at'        => format_date($product->created_at),
            'updated_at'        => format_date($product->updated_at),
        ];
    }
}