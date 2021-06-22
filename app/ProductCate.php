<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCate extends Model
{
	protected $table = 'product_cates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alias', 'parent_id', 'prioritize', 'status', 'order', 'icon', 'keywords', 'description'
    ];

    public function products(){
        return $this->hasMany('App\Product','cate_id','id');
    }
}
