<?php

namespace App\Http\Controllers;

use App\Article;
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

        $articles = Article::latest('created_at')->paginate(3);

       return view('index', ['articles' => $articles],
                                  ['users' => $users],
                                   [ 'url' => $url]);
   }



    public function show_user ($user)
    {
      $users = User::all();
        return view('profiles.index', ['user'=> $user], ['users' => $users]);
    }





  public function show_article ($slug){

      $article = Article::where('slug', $slug)->first();

      return view('show_article', ['article' => $article]);

  }


  public function show_tags_articles( $slug){


    $tags = Tag::where('slug', $slug)->get();







    return view('show_tags_articles', ['tags' => $tags]);
  }
}
