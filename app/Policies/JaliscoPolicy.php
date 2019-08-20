<?php

namespace App\Policies;

use App\User;
use App\Jalisco;
use Illuminate\Auth\Access\HandlesAuthorization;

class JaliscoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any jaliscos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the jalisco.
     *
     * @param  \App\User  $user
     * @param  \App\Jalisco  $jalisco
     * @return mixed
     */
    public function view(User $user, Jalisco $jalisco)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create jaliscos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return Jalisco::count() < env('PAGE_SIMPLE_MAX', 1);
    }

    /**
     * Determine whether the user can update the jalisco.
     *
     * @param  \App\User  $user
     * @param  \App\Jalisco  $jalisco
     * @return mixed
     */
    public function update(User $user, Jalisco $jalisco)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the jalisco.
     *
     * @param  \App\User  $user
     * @param  \App\Jalisco  $jalisco
     * @return mixed
     */
    public function delete(User $user, Jalisco $jalisco)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can restore the jalisco.
     *
     * @param  \App\User  $user
     * @param  \App\Jalisco  $jalisco
     * @return mixed
     */
    public function restore(User $user, Jalisco $jalisco)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the jalisco.
     *
     * @param  \App\User  $user
     * @param  \App\Jalisco  $jalisco
     * @return mixed
     */
    public function forceDelete(User $user, Jalisco $jalisco)
    {
        return $user->admin;
    }
}
