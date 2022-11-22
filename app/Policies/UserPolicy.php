<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->email==="alexis@gmail.com";
    }

    // The first User model is the 'admin' user, and the second call to user model is the user that the admin is editing
    // public function edit(User $user, User $model)
    public function edit(User $user)
    {
        //
        return (bool) mt_rand(0,1);
    }


}
