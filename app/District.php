<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_local', 'name_global', 'alias', 'district_id', 'level', 'city_id',
    ];

    public function projects(){
        return $this->hasMany('App\Project','adr_district_id','district_id');
    }
}
