<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $table = 'user_device';

    public function Login()
    {
        return $this->hasMany('App\LoginDevice', 'user_device_id');
    }
}
