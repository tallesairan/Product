<?php

namespace Figmax\Product\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Figmax\Product\Interfaces\AttributeRepositoryInterface;

class AttributePublicController extends BaseController
{
    // use AttributeWorkflow;

    /**
     * Constructor.
     *
     * @param type \Figmax\Attribute\Interfaces\AttributeRepositoryInterface $attribute
     *
     * @return type
     */
    public function __construct(AttributeRepositoryInterface $attribute)
    {
        $this->repository = $attribute;
        parent::__construct();
    }

    /**
     * Show attribute's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $attributes = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$product::$attribute.names'))
            ->view('$product::public.attribute.index')
            ->data(compact('$attributes'))
            ->output();
    }

    /**
     * Show attribute's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $attributes = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$product::$attribute.names'))
            ->view('$product::public.attribute.index')
            ->data(compact('$attributes'))
            ->output();
    }

    /**
     * Show attribute.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $attribute = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$attribute->name . trans('$product::$attribute.name'))
            ->view('$product::public.attribute.show')
            ->data(compact('$attribute'))
            ->output();
    }

}
