<?php

namespace App\Http\Controllers;

use App\DB;
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

      $p = DB::create($request->except('_token'));
      $p->save();

      return redirect()->route('/');

   }

}
