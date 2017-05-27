<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $fillable = [
    'title', 'body', 'short_description','user_id'
  ];


  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = str_slug($value);
  }
  public function getTitleAttribute()
  {
    return strtoupper($this->attributes['title']);
  }

  /**
   * Get news by slug
   *
   * @param $query
   * @param $slug
   * @return mixed
   */
  public function scopeBySlug($query, $slug)
  {
    return $query->where('slug', $slug);
  }

  public function user(){
    return $this->belongsTo('App\User');

  }
  public function tags (){

    return $this->belongsToMany('App\Tag');
  }
}
