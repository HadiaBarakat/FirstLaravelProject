<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $imagesDirectory = "/images/";

    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image_path'
    ];

   /* public function user(){
        return $this->belongsTo('App\User', 'userId', 'userId');
    }*/

   public function user(){
       return $this->belongsTo('App\User', 'userId', 'userId');
   }

   public function image(){
       return $this->morphOne('App\Image', 'imageable');
   }

   public function tags(){
       return $this->morphToMany('App\Tag', 'taggable');
   }

    public function scopePhp($query){
        return $query->whereTitle('PHP');
    }

    public function setImagePathAttribute($value){
        return "setImagePathAttribute";
    }

    public function getImagePathAttribute($value){
        return $this->imagesDirectory . $value;
    }

}
