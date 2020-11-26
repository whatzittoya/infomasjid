<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function masjids()
    {
        return $this->belongsToMany('App\Masjid', 'USER_MASJID', 'user_id', 'masjid_id')->withPivot('active_status');
    }
    public function isAdmin()
    {
        if ($this->user_role == 'admin') {
            return true;
        }
        return false;
    }
    public function isTakmir()
    {
        if ($this->user_role == 'takmir') {
            return true;
        }
        return false;
    }
    public function hasRole($role)
    {
        if ($this->user_role == $role) {
            return true;
        }
        return false;
    }
    public function takmir()
    {
        return $this->hasMany('App\Takmir');
    }
}
