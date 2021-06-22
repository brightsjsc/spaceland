<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alias', 'adr_city_id', 'adr_district_id', 'adr_commune_id', 'address'
    ];

    public function city(){
        return $this->belongsTo('App\City','adr_city_id','city_id');
    }

    public function district(){
        return $this->belongsTo('App\District','adr_district_id','district_id');
    }

    public function commune(){
        return $this->belongsTo('App\Commune','adr_commune_id','commune_id');
    }
}
