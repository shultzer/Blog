<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Image;


class UserController extends Controller
{

  public function __construct() {

      $this->middleware( 'auth');
      $this->middleware('can:make-action-this-post,article', ['only' => ['update_article', 'edit_article_form']]);
  }

  public function form (Tag $tag, Article $article){

    return view('user.add_article',['tag' => $tag], ['article'] );

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

      if(!$request->hasFile('photo')){
        //return redirect()->back();
      }

      foreach ($request->file('photo') as $photo) {



          $fileName = time() . '_' . $photo->getClientOriginalName();
          $r = $photo->storeAs('article_images', $fileName, ['disk' => 'article']);
          $pathToFile = Storage::disk('article')->getDriver()->getAdapter()->getPathPrefix();
          $whereToSave = $pathToFile . 'article_images/' .  'th-' . $fileName;

          Image::make($pathToFile.$r)->fit(200)->save($whereToSave, 100);


      }

      $user = Auth::user();

      $article = $user->article()->create($request->except('_token'));
      $article->tags()->attach($request->get('tag_list'));
      if (Input::hasFile('photo'))
      {

        $article->photos()->create(['photo' => $r, 'thumbnails' => $whereToSave]);
      }

    return redirect()->route('/');

  }


  public function edit_article_form (Article $articles, $slug){

      $article = $articles->where(['slug' => $slug])->first();


    return view('user.edit_article', ['article' => $article]);

  }


  public function update_article (Article $articles, Request $request, $slug) {

      $article = $articles->where(['slug' => $slug])->first();


      $this->validate($request, [
        'title' => 'required|unique:articles,title,'.$article->id,
        'slug' => 'reqiured|unique:articles|max:255',
        'short_description' => 'required|max:255',
        'body' => 'required|max:2000'
      ]);

      $article->where(['slug' => $slug])->update($request->except(['_token', '_method', 'tag_list']));
      $article->tags()->sync($request->get('tag_list'));


    return redirect()->route('/');
  }

}
