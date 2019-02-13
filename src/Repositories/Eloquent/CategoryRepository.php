<?php

namespace Figmax\Product\Repositories\Eloquent;

use Figmax\Product\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('figmax.product.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('figmax.product.category.model.model');
    }
}
