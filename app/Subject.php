<?php

namespace App;

use App\Account;
use App\Grade;
use App\Section;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subject extends Authenticatable
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


    public function course() {
        return $this->belongsTo(Course::class);
    }
    public function prerequisites() {
        return $this->hasMany(Prerequisite::class);
    }
    public function grades() {
        return $this->hasMany(Grade::class);
    }
    public function section() {
    	return $this->belongsTo(Section::class);
    }
}