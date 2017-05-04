<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $todo = DB::select('select * from users where active = ?', [1]);

        //global $queryBuilder;
        //$tasks = App::get('db')->table('todo')->all();

        return view('todo', ['todo' => $todo]);
    }

    public function add()
    {
        global $queryBuilder;

        $queryBuilder->table('todo')->insert([
            'title' => Request::get('title', '')]);

        Request::back();
    }
    public function del ()
    {



        if ($_POST['action'] == 'delete') {
            global $queryBuilder;
            foreach ($_POST['delitem'] as $delitem) {
                $queryBuilder->table('todo')->delete($delitem);
            }
            Request::back();
        }elseif($_POST ['action']=='complete'){
            global $queryBuilder;
            foreach ($_POST['delitem'] as $delitem) {
                $queryBuilder->table('todo')->complete($delitem);
            }
            Request::back();

        }else{

            echo 'Выберите действие complete';

        }
    }


}
