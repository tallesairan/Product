<?php

namespace Figmax\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(\Figmax\Product\Models\Category $category)
    {
        return [
            'id'                => $category->getRouteKey(),
            'key'               => [
                'public'    => $category->getPublicKey(),
                'route'     => $category->getRouteKey(),
            ], 
            'id'                => $category->id,
            'user_id'           => $category->user_id,
            'parent_id'         => $category->parent_id,
            'name'              => $category->name,
            'slug'              => $category->slug,
            'status'            => $category->status,
            'meta_title'        => $category->meta_title,
            'meta_description'  => $category->meta_description,
            'meta_keyword'      => $category->meta_keyword,
            'image'             => $category->image,
            'order'             => $category->order,
            'upload_folder'     => $category->upload_folder,
            'created_at'        => $category->created_at,
            'updated_at'        => $category->updated_at,
            'deleted_at'        => $category->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$category->getPublicKey()),
                'user'      => guard_url('product/category/'.$category->getRouteKey()),
            ], 
            'status'            => trans('app.'.$category->status),
            'created_at'        => format_date($category->created_at),
            'updated_at'        => format_date($category->updated_at),
        ];
    }
}