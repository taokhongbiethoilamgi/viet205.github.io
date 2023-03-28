<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'title', 'category_status'
    ];
    protected $primaryKey = 'id_category';
    protected $table = 'category_post';

     public function post(){
        return $this->hasMany('App\Models\Post');
    }
}

