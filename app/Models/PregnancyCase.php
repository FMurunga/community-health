<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PregnancyCase extends Model
{
    //
     public function household()
    {
        return $this->belongsTo('App\Models\PregnancyCases', 'household_id');
    }
}
