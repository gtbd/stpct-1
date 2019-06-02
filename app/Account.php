<?php

namespace App;

use App\Admin;
use App\Avatar;
use App\Faculty;
use App\HeadTeacher;
use App\Registrar;
use App\Student;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'accounts';

    public function student() {
        return $this->hasOne(Student::class);
    }
    public function faculty() {
        return $this->hasOne(Faculty::class);
    }
    public function registrar() {
        return $this->hasOne(Registrar::class);
    }
    public function admin() {
        return $this->hasOne(Admin::class);
    }
    public function head_teacher() {
        return $this->hasOne(HeadTeacher::class);
    }
    public function avatar() {
        return $this->hasOne(Avatar::class);
    }
}
