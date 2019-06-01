<?php

namespace App\Policies;

use App\Account;
use App\Subject;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subject.
     *
     * @param  \App\Account  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    
    public function addSubjects(Account $user)
    {
        return $user->account_type == 'Admin';
    }

    public function view(Account $user, Subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can create subjects.
     *
     * @param  \App\Account  $user
     * @return mixed
     */
    public function create(Account $user)
    {
        //
    }

    /**
     * Determine whether the user can update the subject.
     *
     * @param  \App\Account  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function update(Account $user, Subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can delete the subject.
     *
     * @param  \App\Account  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function delete(Account $user, Subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can restore the subject.
     *
     * @param  \App\Account  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function restore(Account $user, Subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the subject.
     *
     * @param  \App\Account  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function forceDelete(Account $user, Subject $subject)
    {
        //
    }
}
