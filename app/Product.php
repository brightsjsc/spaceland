<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\District;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alias', 'address', 'product_cate_id', 'project_id', 'acreage', 'price', 'price_type', 'description', 'witdh', 'land_witdh', 'home_direction', 'bacon_direction', 'floor_number', 'room_number', 'toilet_number', 'furniture', 'legality', 'image', 'gallerys', 'video_url', 'map', 'contact_name', 'contact_address', 'contact_phone', 'contact_mobile', 'contact_email', 'status', 'publish',
    ];

    public function product_cate(){
        return $this->belongsTo('App\ProductCate','product_cate_id','id');
    }

    public function project(){
        return $this->belongsTo('App\Project','project_id','id');
    }
    public static function getProductByDistrict($district){
        return Project::where(['adr_district_id' => $district])
                    ->leftJoin('products', 'projects.id', '=', 'products.project_id')
                    ->select([
                        '*',
                        'products.name as product_name',
                        'projects.name as project_name',
                    ])
                    ->limit(8)
                    ->orderBy('products.id','desc')
                    ->get();
     }

}
