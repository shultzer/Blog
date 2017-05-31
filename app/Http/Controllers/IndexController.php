<?php

namespace App\Http\Controllers;

use App\Article;
use App\Photo;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

 class IndexController extends Controller
{
    public $users=[
'user2'=>'12',
'Alex'=>'24',
'Pamella'=>'40'];

  public function index (Request $request)
   {
     $url = $request->url();
     $users = User::all();
     $photos = Photo::all();
     $articles = Article::latest('created_at')->paginate(3);


     return view('index', ['articles' => $articles],
                                  ['users' => $users],
                                   [ 'url' => $url],
                                    ['photos' => $photos]);
   }



    public function show_user ($user)
    {
      $users = User::all();
        return view('profiles.index', ['user'=> $user], ['users' => $users]);
    }





  public function show_article (Article $article){

      //$article = Article::where('slug', $slug)->first();

      return view('show_article', ['article' => $article]);

  }


  public function show_tags_articles( Article $article, $tag){


    $tags = Tag::where('slug', $tag)->get();
    $photos = Photo::all();

    return view('show_tags_articles', ['tags' => $tags], ['photos' => $photos]);
  }
}
