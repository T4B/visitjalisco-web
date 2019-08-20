<?php

namespace App\Policies;

use App\User;
use App\Experience;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExperiencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any experiences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the experience.
     *
     * @param  \App\User  $user
     * @param  \App\Experience  $experience
     * @return mixed
     */
    public function view(User $user, Experience $experience)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create experiences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can update the experience.
     *
     * @param  \App\User  $user
     * @param  \App\Experience  $experience
     * @return mixed
     */
    public function update(User $user, Experience $experience)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the experience.
     *
     * @param  \App\User  $user
     * @param  \App\Experience  $experience
     * @return mixed
     */
    public function delete(User $user, Experience $experience)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can restore the experience.
     *
     * @param  \App\User  $user
     * @param  \App\Experience  $experience
     * @return mixed
     */
    public function restore(User $user, Experience $experience)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the experience.
     *
     * @param  \App\User  $user
     * @param  \App\Experience  $experience
     * @return mixed
     */
    public function forceDelete(User $user, Experience $experience)
    {
        return $user->admin;
    }
}
