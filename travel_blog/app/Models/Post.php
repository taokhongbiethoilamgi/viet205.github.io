<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'title_post', 'image_post', 'content_post', 'summary_post', 'id_category', 'status_post'
    ];
    protected $primaryKey = 'id_post';
    protected $table = 'post';

    public function category(){
        return $this->belongsTo('App\Models\Category','id_category');
    }
}
