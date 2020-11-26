<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Masjid extends Model
{
    //
    use SoftDeletes;
    protected $table = 'MASJID';
    protected $primaryKey = 'masjid_id';
    protected $appends = ['image_url'];

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';

    protected static function boot()
    {
        parent::boot();
        Masjid::creating(function ($model) {
            $model->insert_by = Auth::user()->id;
        });
        Masjid::updating(function ($model) {
            $model->update_by = Auth::user()->id;
        });
        Masjid::deleting(function ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            Log::info('deleted');
        });
    }
    public function berita()
    {
        return $this->hasMany('App\Berita', 'berita_id');
    }
    public function Users()
    {
        return $this->belongsToMany('App\User', 'USER_MASJID', 'masjid_id', 'user_id')->withPivot('active_status');
    }
    public function getImageUrlAttribute()
    {
        if (isset($_SERVER['HTTPS'])) {
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        } else {
            $protocol = 'http';
        }
        $url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        return "{$url}/{$this->foto}";
    }
    public function UsersFollow()
    {
        return $this->belongsToMany('App\User', 'MASJID_FAVORIT', 'masjid_id', 'user_id')->withPivot(('selected'));
    }
    public function Follow()
    {
        return $this->hasMany('App\MasjidFavorit', 'masjid_id');
    }
}
