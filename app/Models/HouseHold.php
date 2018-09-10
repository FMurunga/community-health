<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    //
     public function patients()
    {
        return $this->hasMany('App\Models\Patient', 'household_id');
    }

     public function pregnancy()
    {
        return $this->hasMany('App\Models\PregnancyCases', 'household_id');
    }
}
