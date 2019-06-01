<?php

namespace App\Policies;

use App\Account;
use App\Enrollment;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnrollmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the enrollment.
     *
     * @param  \App\Account  $user
     * @param  \App\Enrollment  $enrollment
     * @return mixed
     */
    public function viewEnrollment(Account $user)
    {
        return $user->account_type == 'Student';
    }

    /**
     * Determine whether the user can create enrollments.
     *
     * @param  \App\Account  $user
     * @return mixed
     */
    public function createEnrollment(Account $user)
    {
        //
        return $user->account_type == 'Admin';
    }

    /**
     * Determine whether the user can update the enrollment.
     *
     * @param  \App\Account  $user
     * @param  \App\Enrollment  $enrollment
     * @return mixed
     */
    public function update(Account $user, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can delete the enrollment.
     *
     * @param  \App\Account  $user
     * @param  \App\Enrollment  $enrollment
     * @return mixed
     */
    public function delete(Account $user, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can restore the enrollment.
     *
     * @param  \App\Account  $user
     * @param  \App\Enrollment  $enrollment
     * @return mixed
     */
    public function restore(Account $user, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the enrollment.
     *
     * @param  \App\Account  $user
     * @param  \App\Enrollment  $enrollment
     * @return mixed
     */
    public function forceDelete(Account $user, Enrollment $enrollment)
    {
        //
    }
}
