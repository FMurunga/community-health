<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
     public function chw()
    {
        return $this->belongsTo('App\CommunityHealthWorker', 'chw_id');
    }
    
}
