<?php

namespace Figmax\Product\Repositories\Eloquent;

use Figmax\Product\Interfaces\AttributeGroupRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class AttributeGroupRepository extends BaseRepository implements AttributeGroupRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('figmax.product.attribute_group.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('figmax.product.attribute_group.model.model');
    }
}
