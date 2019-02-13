<?php

namespace Figmax\Product\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Figmax\Product\Http\Requests\AttributeGroupRequest;
use Figmax\Product\Interfaces\AttributeGroupRepositoryInterface;
use Figmax\Product\Models\AttributeGroup;

/**
 * Resource controller class for attribute_group.
 */
class AttributeGroupResourceController extends BaseController
{

    /**
     * Initialize attribute_group resource controller.
     *
     * @param type AttributeGroupRepositoryInterface $attribute_group
     *
     * @return null
     */
    public function __construct(AttributeGroupRepositoryInterface $attribute_group)
    {
        parent::__construct();
        $this->repository = $attribute_group;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Figmax\Product\Repositories\Criteria\AttributeGroupResourceCriteria::class);
    }

    /**
     * Display a list of attribute_group.
     *
     * @return Response
     */
    public function index(AttributeGroupRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Figmax\Product\Repositories\Presenter\AttributeGroupPresenter::class)
                ->$function();
        }

        $attribute_groups = $this->repository->paginate();

        return $this->response->title(trans('product::attribute_group.names'))
            ->view('product::attribute_group.index', true)
            ->data(compact('attribute_groups'))
            ->output();
    }

    /**
     * Display attribute_group.
     *
     * @param Request $request
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function show(AttributeGroupRequest $request, AttributeGroup $attribute_group)
    {

        if ($attribute_group->exists) {
            $view = 'product::attribute_group.show';
        } else {
            $view = 'product::attribute_group.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('product::attribute_group.name'))
            ->data(compact('attribute_group'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new attribute_group.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AttributeGroupRequest $request)
    {

        $attribute_group = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('product::attribute_group.name')) 
            ->view('product::attribute_group.create', true) 
            ->data(compact('attribute_group'))
            ->output();
    }

    /**
     * Create new attribute_group.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AttributeGroupRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $attribute_group                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('product::attribute_group.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/attribute_group/' . $attribute_group->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/product/attribute_group'))
                ->redirect();
        }

    }

    /**
     * Show attribute_group for editing.
     *
     * @param Request $request
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function edit(AttributeGroupRequest $request, AttributeGroup $attribute_group)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('product::attribute_group.name'))
            ->view('product::attribute_group.edit', true)
            ->data(compact('attribute_group'))
            ->output();
    }

    /**
     * Update the attribute_group.
     *
     * @param Request $request
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function update(AttributeGroupRequest $request, AttributeGroup $attribute_group)
    {
        try {
            $attributes = $request->all();

            $attribute_group->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('product::attribute_group.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/attribute_group/' . $attribute_group->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/attribute_group/' . $attribute_group->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the attribute_group.
     *
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function destroy(AttributeGroupRequest $request, AttributeGroup $attribute_group)
    {
        try {

            $attribute_group->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::attribute_group.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('product/attribute_group/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/attribute_group/' . $attribute_group->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple attribute_group.
     *
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function delete(AttributeGroupRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::attribute_group.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('product/attribute_group'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/attribute_group'))
                ->redirect();
        }

    }

    /**
     * Restore deleted attribute_groups.
     *
     * @param Model   $attribute_group
     *
     * @return Response
     */
    public function restore(AttributeGroupRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('product::attribute_group.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/product/attribute_group'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/attribute_group/'))
                ->redirect();
        }

    }

}
