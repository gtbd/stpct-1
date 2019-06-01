<?php

namespace App\Policies;

use App\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the account.
     *
     * @param  \App\Account  $user
     * @param  \App\Account  $account
     * @return mixed
     */
    /*public function view(Account $user, Account $account)
    {
        //
    }*/

    /**
     * Determine whether the user can create accounts.
     *
     * @param  \App\Account  $user
     * @return mixed
     */
    public function createStaff(Account $user)
    {
        return $user->account_type == 'Admin';
    }
    public function createStudent(Account $user)
    {
        return $user->account_type == 'Registrar';
    }
    public function addSubject(Account $user)
    {
        return $user->account_type == 'Admin';
    }

    


}
