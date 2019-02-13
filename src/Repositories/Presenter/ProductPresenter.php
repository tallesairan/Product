<?php

namespace Figmax\Product\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class ProductPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProductTransformer();
    }
}