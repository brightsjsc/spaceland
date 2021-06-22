<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_local', 'name_global', 'alias', 'commune_id', 'level', 'district_id',
    ];
}
