<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Berita extends Model
{
    //
    use SoftDeletes;

    protected $table = 'BERITA';
    protected $primaryKey = 'berita_id';

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';

    protected static function boot()
    {
        parent::boot();
        Berita::creating(function ($model) {
            $model->insert_by = Auth::user()->id;
        });
        Berita::updating(function ($model) {
            $model->update_by = Auth::user()->id;
        });
        Berita::deleting(function ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            Log::info('deleted');
        });
    }
    public function masjids()
    {
        return $this->belongsTo('App\Masjid', 'masjid_id');
    }
}
