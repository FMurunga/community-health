<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refferal extends Model
{
    //
       public function patients()
    {
        return $this->hasMany('App\Patient', 'patient_id');
    }
}
