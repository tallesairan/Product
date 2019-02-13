<?php

namespace Figmax\Product\Policies;

use Litepie\User\Contracts\UserPolicy;
use Figmax\Product\Models\Attribute;

class AttributePolicy
{

    /**
     * Determine if the given user can view the attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function view(UserPolicy $user, Attribute $attribute)
    {
        if ($user->canDo('product.attribute.view') && $user->isAdmin()) {
            return true;
        }

        return $attribute->user_id == user_id() && $attribute->user_type == user_type();
    }

    /**
     * Determine if the given user can create a attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('product.attribute.create');
    }

    /**
     * Determine if the given user can update the given attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function update(UserPolicy $user, Attribute $attribute)
    {
        if ($user->canDo('product.attribute.edit') && $user->isAdmin()) {
            return true;
        }

        return $attribute->user_id == user_id() && $attribute->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Attribute $attribute)
    {
        return $attribute->user_id == user_id() && $attribute->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Attribute $attribute)
    {
        if ($user->canDo('product.attribute.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given attribute.
     *
     * @param UserPolicy $user
     * @param Attribute $attribute
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Attribute $attribute)
    {
        if ($user->canDo('product.attribute.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
