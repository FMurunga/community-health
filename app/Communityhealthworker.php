<?php

namespace App;

use App\Notifications\CommunityhealthworkerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Communityhealthworker extends Authenticatable
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
        $this->notify(new CommunityhealthworkerResetPassword($token));
    }

    /**
     * Get the type that owns the community health worker.
     */
    public function chwtype()
    {
        return $this->belongsTo('App\Models\CommunityHealthWorkerType', 'chw_type_id');
    }

     public function hospital()
    {
        return $this->belongsTo('App\Hospital', 'hospital_id');

    }
     public function patient()
    {
        return $this->hasMany('App\Models\Patient', 'chw_id');
    }

     public function assessments()
    {
        return $this->hasMany('App\Models\Assessment', 'chw_id');
    }
     public function tasks()
    {
        return $this->belongsTo('App\Models\Task', 'chw_id');
    }
}
