<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
       public function refferals()
    {
        return $this->belongsTo('App\Refferal', 'refferal_id');
    }

       public function chw()
    {
        return $this->belongsTo('App\communityhealthworker', 'chw_id');
    }

 public function household()
    {
        return $this->belongsTo('App\Models\HouseHold', 'household_id');
    }

     public function assessments()
    {
        return $this->hasMany('App\Models\Assessment', 'patient_id');
    }

}
