<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    //
    use softDeletes;
    protected $fillable = [
        'title', 'content', 'featured', 'category_id','slug','user_id'
    ];

    protected $dates = ['deleted_at'];

    public function getFeaturedAttribute($featured)
    {
      // code...
      return asset($featured);
    }

    public function category()
    {
      // code...
      return $this->belongsTo('App\Category');
    }
    public function user()
    {
      // code...
      return $this->belongsTo('App\User');
    }

    public function tags()
    {
      // code...
      return $this->belongsToMany('App\Tag');
    }
}
