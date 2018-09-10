<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //
     public function chw()
    {
        return $this->belongsTo('App\communityhealthworker', 'chw_id');
    }
     public function patient()
    {
        return $this->belongsTo('App\Models\HouseHold', 'patient_id');
    }
}
