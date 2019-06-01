<?php

namespace App;

use App\Student;
use App\Subject;
use App\Schedule;
use App\Room;
use App\Section;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Class extends Authenticatable
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

    public function sections() {
    	return $this->hasMany(Section::class);
    }
    public function subjects() {
    	return $this->hasMany(Subject::class);
    }
    public function rooms() {
    	return $this->hasMany(Room::class);
    }
    public function schedules() {
    	return $this->hasMany(Schedule::class);
    }
    public function students() {
    	return $this->belongsTo(Student::class);
    }
}
