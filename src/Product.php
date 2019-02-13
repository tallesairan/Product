<?php

namespace Figmax\Product;

use User;

class Product
{
    /**
     * $product object.
     */
    protected $product;
    /**
     * $category object.
     */
    protected $category;
    /**
     * $attribute_group object.
     */
    protected $attribute_group;
    /**
     * $attribute object.
     */
    protected $attribute;

    /**
     * Constructor.
     */
    public function __construct(\Figmax\Product\Interfaces\ProductRepositoryInterface $product,
        \Figmax\Product\Interfaces\CategoryRepositoryInterface $category,
        \Figmax\Product\Interfaces\AttributeGroupRepositoryInterface $attribute_group,
        \Figmax\Product\Interfaces\AttributeRepositoryInterface $attribute)
    {
        $this->product = $product;
        $this->category = $category;
        $this->attribute_group = $attribute_group;
        $this->attribute = $attribute;
    }

    /**
     * Returns count of product.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.product.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->product->pushCriteria(new \Litepie\Figmax\Repositories\Criteria\ProductUserCriteria());
        }

        $product = $this->product->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('product::' . $view, compact('product'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.category.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->category->pushCriteria(new \Litepie\Figmax\Repositories\Criteria\CategoryUserCriteria());
        }

        $category = $this->category->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('product::' . $view, compact('category'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.attribute_group.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->attribute_group->pushCriteria(new \Litepie\Figmax\Repositories\Criteria\AttributeGroupUserCriteria());
        }

        $attribute_group = $this->attribute_group->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('product::' . $view, compact('attribute_group'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.attribute.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->attribute->pushCriteria(new \Litepie\Figmax\Repositories\Criteria\AttributeUserCriteria());
        }

        $attribute = $this->attribute->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('product::' . $view, compact('attribute'))->render();
    }
}
