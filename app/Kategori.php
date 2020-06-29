<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = 'KATEGORI';
    protected $primaryKey = 'kategori_id';

    const CREATED_AT = 'insert_date';
    const UPDATED_AT = 'update_date';
}
