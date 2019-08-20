<?php

namespace App\Policies;

use App\User;
use App\Slider;
use Illuminate\Auth\Access\HandlesAuthorization;

class SliderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any sliders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can view the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function view(User $user, Slider $slider)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can create sliders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can update the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function update(User $user, Slider $slider)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can delete the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function delete(User $user, Slider $slider)
    {
        return $user->panel;
    }

    /**
     * Determine whether the user can restore the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function restore(User $user, Slider $slider)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can permanently delete the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function forceDelete(User $user, Slider $slider)
    {
        return $user->admin;
    }
}
