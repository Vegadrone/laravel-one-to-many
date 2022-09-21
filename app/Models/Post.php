<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'user_id',
        'post_image',
        'post_date',
        'post_content',
    ];

    public function user(){
       return $this->belongsTo('App\User');
    }
}
