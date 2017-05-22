<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function form (){


    return view('user.add_article');

  }

  /**
   * @param \Illuminate\Http\Request $request
   */


  public function add_article (Request $request){

    $this->validate($request, [
      'title' => 'required|unique:articles|max:140',
      'slug' => 'reqiured|unique:articles|max:255',
      'short_description' => 'required|max:255',
      'body' => 'required|max:2000'
    ]);

    $p = Article::create($request->except('_token'));
    $p->save();

    return redirect()->route('/');

  }


  public function edit_article_form (Article $articles, $slug){

    $article = $articles->where(['slug' => $slug])->first();



    return view('user.edit_article', ['article' => $article]);

  }


  public function update_article (Article $articles, Request $request, $slug) {


    $articles->where(['slug' => $slug])->update($request->except(['_token', '_method']));

    return redirect()->route('/');
  }

}
