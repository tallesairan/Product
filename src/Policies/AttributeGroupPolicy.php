<?php

namespace Figmax\Product\Policies;

use Litepie\User\Contracts\UserPolicy;
use Figmax\Product\Models\AttributeGroup;

class AttributeGroupPolicy
{

    /**
     * Determine if the given user can view the attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function view(UserPolicy $user, AttributeGroup $attribute_group)
    {
        if ($user->canDo('product.attribute_group.view') && $user->isAdmin()) {
            return true;
        }

        return $attribute_group->user_id == user_id() && $attribute_group->user_type == user_type();
    }

    /**
     * Determine if the given user can create a attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('product.attribute_group.create');
    }

    /**
     * Determine if the given user can update the given attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function update(UserPolicy $user, AttributeGroup $attribute_group)
    {
        if ($user->canDo('product.attribute_group.edit') && $user->isAdmin()) {
            return true;
        }

        return $attribute_group->user_id == user_id() && $attribute_group->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, AttributeGroup $attribute_group)
    {
        return $attribute_group->user_id == user_id() && $attribute_group->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function verify(UserPolicy $user, AttributeGroup $attribute_group)
    {
        if ($user->canDo('product.attribute_group.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given attribute_group.
     *
     * @param UserPolicy $user
     * @param AttributeGroup $attribute_group
     *
     * @return bool
     */
    public function approve(UserPolicy $user, AttributeGroup $attribute_group)
    {
        if ($user->canDo('product.attribute_group.approve')) {
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
