<?php

namespace App;

use App\Notifications\HospitalResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hospital extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new HospitalResetPassword($token));
    }

     public function staff()
    {
        return $this->hasMany('App\Staff', 'hospitals_id');
    }

     public function communityhealthworker()
    {
        return $this->hasMany('App\CommunityHealthWorker', 'hospitals_id');
    }
}
