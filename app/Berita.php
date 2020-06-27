<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table = 'BERITA';
    protected $primaryKey = 'berita_id';

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';

    public function users()
    {
        return $this->belongsTo('App\Masjid', 'masjid_id');
    }
}
