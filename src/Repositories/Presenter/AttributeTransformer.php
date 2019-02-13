<?php

namespace Figmax\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class AttributeTransformer extends TransformerAbstract
{
    public function transform(\Figmax\Product\Models\Attribute $attribute)
    {
        return [
            'id'                => $attribute->getRouteKey(),
            'key'               => [
                'public'    => $attribute->getPublicKey(),
                'route'     => $attribute->getRouteKey(),
            ], 
            'id'                => $attribute->id,
            'slug'              => $attribute->slug,
            'group_id'          => $attribute->group_id,
            'name'              => $attribute->name,
            'order'             => $attribute->order,
            'created_at'        => $attribute->created_at,
            'updated_at'        => $attribute->updated_at,
            'deleted_at'        => $attribute->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$attribute->getPublicKey()),
                'user'      => guard_url('product/attribute/'.$attribute->getRouteKey()),
            ], 
            'status'            => trans('app.'.$attribute->status),
            'created_at'        => format_date($attribute->created_at),
            'updated_at'        => format_date($attribute->updated_at),
        ];
    }
}