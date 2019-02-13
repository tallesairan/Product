<?php

namespace Figmax\Product\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Figmax\Product\Http\Requests\AttributeRequest;
use Figmax\Product\Interfaces\AttributeRepositoryInterface;
use Figmax\Product\Models\Attribute;

/**
 * Resource controller class for attribute.
 */
class AttributeResourceController extends BaseController
{

    /**
     * Initialize attribute resource controller.
     *
     * @param type AttributeRepositoryInterface $attribute
     *
     * @return null
     */
    public function __construct(AttributeRepositoryInterface $attribute)
    {
        parent::__construct();
        $this->repository = $attribute;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Figmax\Product\Repositories\Criteria\AttributeResourceCriteria::class);
    }

    /**
     * Display a list of attribute.
     *
     * @return Response
     */
    public function index(AttributeRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Figmax\Product\Repositories\Presenter\AttributePresenter::class)
                ->$function();
        }

        $attributes = $this->repository->paginate();

        return $this->response->title(trans('product::attribute.names'))
            ->view('product::attribute.index', true)
            ->data(compact('attributes'))
            ->output();
    }

    /**
     * Display attribute.
     *
     * @param Request $request
     * @param Model   $attribute
     *
     * @return Response
     */
    public function show(AttributeRequest $request, Attribute $attribute)
    {

        if ($attribute->exists) {
            $view = 'product::attribute.show';
        } else {
            $view = 'product::attribute.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('product::attribute.name'))
            ->data(compact('attribute'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new attribute.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AttributeRequest $request)
    {

        $attribute = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('product::attribute.name')) 
            ->view('product::attribute.create', true) 
            ->data(compact('attribute'))
            ->output();
    }

    /**
     * Create new attribute.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AttributeRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $attribute                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('product::attribute.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/attribute/' . $attribute->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/product/attribute'))
                ->redirect();
        }

    }

    /**
     * Show attribute for editing.
     *
     * @param Request $request
     * @param Model   $attribute
     *
     * @return Response
     */
    public function edit(AttributeRequest $request, Attribute $attribute)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('product::attribute.name'))
            ->view('product::attribute.edit', true)
            ->data(compact('attribute'))
            ->output();
    }

    /**
     * Update the attribute.
     *
     * @param Request $request
     * @param Model   $attribute
     *
     * @return Response
     */
    public function update(AttributeRequest $request, Attribute $attribute)
    {
        try {
            $attributes = $request->all();

            $attribute->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('product::attribute.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/attribute/' . $attribute->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/attribute/' . $attribute->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the attribute.
     *
     * @param Model   $attribute
     *
     * @return Response
     */
    public function destroy(AttributeRequest $request, Attribute $attribute)
    {
        try {

            $attribute->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::attribute.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('product/attribute/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/attribute/' . $attribute->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple attribute.
     *
     * @param Model   $attribute
     *
     * @return Response
     */
    public function delete(AttributeRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::attribute.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('product/attribute'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/attribute'))
                ->redirect();
        }

    }

    /**
     * Restore deleted attributes.
     *
     * @param Model   $attribute
     *
     * @return Response
     */
    public function restore(AttributeRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('product::attribute.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/product/attribute'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/attribute/'))
                ->redirect();
        }

    }

}
