<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityHealthWorkerType extends Model
{
    /**
     * Get the health workers for the type post.
     */
    public function communityhealthworkers()
    {
        return $this->hasMany('App\Communityhealthworker', 'chw_type_id');
    }
}
