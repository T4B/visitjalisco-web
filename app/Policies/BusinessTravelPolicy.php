<?php

namespace App\Policies;

use App\User;
use App\BusinessTravel;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessTravelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any business travels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the business travel.
     *
     * @param  \App\User  $user
     * @param  \App\BusinessTravel  $businessTravel
     * @return mixed
     */
    public function view(User $user, BusinessTravel $businessTravel)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create business travels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return BusinessTravel::count() < env('PAGE_SINGLE_MAX', 1);
    }

    /**
     * Determine whether the user can update the business travel.
     *
     * @param  \App\User  $user
     * @param  \App\BusinessTravel  $businessTravel
     * @return mixed
     */
    public function update(User $user, BusinessTravel $businessTravel)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the business travel.
     *
     * @param  \App\User  $user
     * @param  \App\BusinessTravel  $businessTravel
     * @return mixed
     */
    public function delete(User $user, BusinessTravel $businessTravel)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can restore the business travel.
     *
     * @param  \App\User  $user
     * @param  \App\BusinessTravel  $businessTravel
     * @return mixed
     */
    public function restore(User $user, BusinessTravel $businessTravel)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the business travel.
     *
     * @param  \App\User  $user
     * @param  \App\BusinessTravel  $businessTravel
     * @return mixed
     */
    public function forceDelete(User $user, BusinessTravel $businessTravel)
    {
        return $user->admin;
    }
}
