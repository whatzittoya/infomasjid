<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masjidapi extends Model
{
    //
    protected $table = 'MASJID';
    protected $primaryKey = 'masjid_id';
    protected $appends = ['image_url'];

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';


    public function berita()
    {
        return $this->hasMany('App\Berita', 'berita_id');
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
    public function Users()
    {
        return $this->belongsToMany('App\User', 'MASJID_FAVORIT', 'masjid_id', 'user_id')->withPivot(('selected'));
    }
    public function Follow()
    {
        return $this->hasMany('App\MasjidFavorit', 'masjid_id');
    }
}
