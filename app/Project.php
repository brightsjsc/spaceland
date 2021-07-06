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
        'name', 'alias', 'adr_city_id', 'adr_district_id', 'adr_commune_id', 'address', 'background_img', 'thumbnail_img',
        'investor',
        'dev_unit', 'acreage', 'density', 'scale', 'invest_type',
        'start_build', 'end_build', 'juridical', 'owned_type',
        'advisory', 'utilities', 'description', 'image_des',
        'description_scale',  'image_scale', 'description_locate',
        'image_locate', 'description_investor',  'image_investor',
        'description_utilities', 'image_utilities', 'description_more',
        'image_more',  'description_more_2', 'image_more_2', 'description_more_3',
        'image_more_3', 'ground', 'image_ground', 'design',
        'image_design', 'model_house',  'image_house', 'furniture', 'image_furniture',
        'payment', 'image_payment',
        'quest_1', 'answer_1', 'quest_2', 'answer_2', 'quest_3', 'answer_3', 'quest_4', 'answer_4',
    ];

    public function city()
    {
        return $this->belongsTo('App\City', 'adr_city_id', 'city_id');
    }

    public function district()
    {
        return $this->belongsTo('App\District', 'adr_district_id', 'district_id');
    }

    public function commune()
    {
        return $this->belongsTo('App\Commune', 'adr_commune_id', 'commune_id');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}
