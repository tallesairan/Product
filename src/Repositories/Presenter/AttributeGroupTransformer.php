<?php

namespace Figmax\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class AttributeGroupTransformer extends TransformerAbstract
{
    public function transform(\Figmax\Product\Models\AttributeGroup $attribute_group)
    {
        return [
            'id'                => $attribute_group->getRouteKey(),
            'key'               => [
                'public'    => $attribute_group->getPublicKey(),
                'route'     => $attribute_group->getRouteKey(),
            ], 
            'id'                => $attribute_group->id,
            'slug'              => $attribute_group->slug,
            'name'              => $attribute_group->name,
            'order'             => $attribute_group->order,
            'created_at'        => $attribute_group->created_at,
            'updated_at'        => $attribute_group->updated_at,
            'deleted_at'        => $attribute_group->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$attribute_group->getPublicKey()),
                'user'      => guard_url('product/attribute_group/'.$attribute_group->getRouteKey()),
            ], 
            'status'            => trans('app.'.$attribute_group->status),
            'created_at'        => format_date($attribute_group->created_at),
            'updated_at'        => format_date($attribute_group->updated_at),
        ];
    }
}