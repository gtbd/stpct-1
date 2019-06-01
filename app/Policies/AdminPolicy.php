<?php

namespace App\Policies;

use App\Account;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Account  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function view(Account $user, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Account  $user
     * @return mixed
     */
    public function create(Account $user)
    {
        //
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Account  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function update(Account $user, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Account  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function delete(Account $user, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can restore the admin.
     *
     * @param  \App\Account  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function restore(Account $user, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the admin.
     *
     * @param  \App\Account  $user
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function forceDelete(Account $user, Admin $admin)
    {
        //
    }
}
