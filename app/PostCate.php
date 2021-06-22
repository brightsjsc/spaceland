<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCate extends Model
{
    protected $table = 'post_cates';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alias', 'order', 'icon', 'parent_id', 'prioritize', 'status', 'keywords', 'description'
    ];

    public function posts(){
        return $this->hasMany('App\Post','postcate_id','id');
    }
}
