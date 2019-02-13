<?php

namespace Figmax\Product\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Figmax\Product\Interfaces\AttributeGroupRepositoryInterface;

class AttributeGroupPublicController extends BaseController
{
    // use AttributeGroupWorkflow;

    /**
     * Constructor.
     *
     * @param type \Figmax\AttributeGroup\Interfaces\AttributeGroupRepositoryInterface $attribute_group
     *
     * @return type
     */
    public function __construct(AttributeGroupRepositoryInterface $attribute_group)
    {
        $this->repository = $attribute_group;
        parent::__construct();
    }

    /**
     * Show attribute_group's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $attribute_groups = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$product::$attribute_group.names'))
            ->view('$product::public.attribute_group.index')
            ->data(compact('$attribute_groups'))
            ->output();
    }

    /**
     * Show attribute_group's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $attribute_groups = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$product::$attribute_group.names'))
            ->view('$product::public.attribute_group.index')
            ->data(compact('$attribute_groups'))
            ->output();
    }

    /**
     * Show attribute_group.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $attribute_group = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$attribute_group->name . trans('$product::$attribute_group.name'))
            ->view('$product::public.attribute_group.show')
            ->data(compact('$attribute_group'))
            ->output();
    }

}
