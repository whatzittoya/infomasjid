<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    //
    protected $table = 'MASJID';
    protected $primaryKey = 'masjid_id';

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';

    public function users()
    {
        return $this->belongsToMany('App\User', 'USER_MASJID', 'masjid_id', 'user_id')->withPivot('active_status');
    }
}
