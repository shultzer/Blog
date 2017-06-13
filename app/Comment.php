<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'body',
    'author',
    'article_id'
  ];
    public function article(){

      return $this->belongsTo('App\Article');

    }

  public function users () {
    return $this->belongsTo( 'App\User' );

  }
}
