<?php

namespace Figmax\Product\Repositories\Eloquent;

use Figmax\Product\Interfaces\AttributeRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class AttributeRepository extends BaseRepository implements AttributeRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('figmax.product.attribute.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('figmax.product.attribute.model.model');
    }
}
