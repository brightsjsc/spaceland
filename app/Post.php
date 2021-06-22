<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'alias', 'tag', 'keyword', 'image', 'description', 'content', 'views', 'type_id', 'status', 'postcate_id'
    ];

    public function category(){
        return $this->belongsTo('App\PostCate','postcate_id','id');
    }
}
