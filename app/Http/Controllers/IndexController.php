<?php

namespace App\Http\Controllers;

use App\DB;
use Illuminate\Http\Request;

 class IndexController extends Controller
{
    public $users=[
'John'=>'12',
'Alex'=>'24',
'Pamella'=>'40'];

  public function index ()
   {

        $articles = DB::latest('created_at')->paginate(3);

       return view('index', ['articles' => $articles],
                                  ['users' => $this->users]);
   }
    public function show_user ($user)
    {
        $age=$this->users[$user];

        return view('profiles.index', ['user'=>$user,
                                    'age'=>$age,
                                    'users'=>$this->users]);
    }

  public function show_article ($id){
      $article = DB::where('id', $id)->first();
      return view('show_article', ['article' => $article]);

  }
}
