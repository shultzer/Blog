<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

  protected $fillable = [
    'photo', 'thumbnails', 'article_id'
  ];
  public function articles() {

    return $this->belongsTo('App\Article');

  }
}
