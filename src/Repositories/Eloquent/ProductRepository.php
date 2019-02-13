<?php

namespace Figmax\Product\Repositories\Eloquent;

use Figmax\Product\Interfaces\ProductRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('figmax.product.product.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('figmax.product.product.model.model');
    }
}
