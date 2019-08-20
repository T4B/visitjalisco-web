<?php

namespace App\Policies;

use App\User;
use App\ConventionCenter;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConventionCenterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any convention centers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the convention center.
     *
     * @param  \App\User  $user
     * @param  \App\ConventionCenter  $conventionCenter
     * @return mixed
     */
    public function view(User $user, ConventionCenter $conventionCenter)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create convention centers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can update the convention center.
     *
     * @param  \App\User  $user
     * @param  \App\ConventionCenter  $conventionCenter
     * @return mixed
     */
    public function update(User $user, ConventionCenter $conventionCenter)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the convention center.
     *
     * @param  \App\User  $user
     * @param  \App\ConventionCenter  $conventionCenter
     * @return mixed
     */
    public function delete(User $user, ConventionCenter $conventionCenter)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can restore the convention center.
     *
     * @param  \App\User  $user
     * @param  \App\ConventionCenter  $conventionCenter
     * @return mixed
     */
    public function restore(User $user, ConventionCenter $conventionCenter)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the convention center.
     *
     * @param  \App\User  $user
     * @param  \App\ConventionCenter  $conventionCenter
     * @return mixed
     */
    public function forceDelete(User $user, ConventionCenter $conventionCenter)
    {
        return $user->admin;
    }
}
