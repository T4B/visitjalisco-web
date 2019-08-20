<?php

namespace App\Policies;

use App\User;
use App\Route;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoutePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any routes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the route.
     *
     * @param  \App\User  $user
     * @param  \App\Route  $route
     * @return mixed
     */
    public function view(User $user, Route $route)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create routes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can update the route.
     *
     * @param  \App\User  $user
     * @param  \App\Route  $route
     * @return mixed
     */
    public function update(User $user, Route $route)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the route.
     *
     * @param  \App\User  $user
     * @param  \App\Route  $route
     * @return mixed
     */
    public function delete(User $user, Route $route)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can restore the route.
     *
     * @param  \App\User  $user
     * @param  \App\Route  $route
     * @return mixed
     */
    public function restore(User $user, Route $route)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the route.
     *
     * @param  \App\User  $user
     * @param  \App\Route  $route
     * @return mixed
     */
    public function forceDelete(User $user, Route $route)
    {
        return $user->admin;
    }
}
