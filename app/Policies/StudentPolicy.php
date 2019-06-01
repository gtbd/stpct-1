<?php

namespace App\Policies;

use App\Account;
use App\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the student.
     *
     * @param  \App\Account  $user
     * @param  \App\Student  $student
     * @return mixed
     */

    /**
     * Determine whether the user can create students.
     *
     * @param  \App\Account  $user
     * @return mixed
     */
    public function create(Account $user)
    {
        //
    }

    /**
     * Determine whether the user can update the student.
     *
     * @param  \App\Account  $user
     * @param  \App\Student  $student
     * @return mixed
     */
    public function update(Account $user, Student $student)
    {
        //
    }

    /**
     * Determine whether the user can delete the student.
     *
     * @param  \App\Account  $user
     * @param  \App\Student  $student
     * @return mixed
     */
    public function delete(Account $user, Student $student)
    {
        //
    }

    /**
     * Determine whether the user can restore the student.
     *
     * @param  \App\Account  $user
     * @param  \App\Student  $student
     * @return mixed
     */
    public function restore(Account $user, Student $student)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the student.
     *
     * @param  \App\Account  $user
     * @param  \App\Student  $student
     * @return mixed
     */
    public function forceDelete(Account $user, Student $student)
    {
        //
    }

    public function enrollBySubject(Student $user) {
        
        return $user->isCollege == true;
    }

    public function enrollBySection(Student $user) {
        
        return $user->isCollege == false;
    }
 
    public function viewEnrollmentPage(Account $user, Student $student) {
        
        return $user->account_type == 'Student';
    }
}
