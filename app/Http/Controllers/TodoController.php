<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    private $id;
    private $title;
    private $complete;

    public function index()
    {
        $todo = DB::table('todo')->get();

         return view('todo', ['todo' => $todo]);
    }

    public function add()
    {
        DB::table('todo')->insert(['title'=>$_REQUEST['title']]);

        $url = array_key_exists('HTTP_REFERER', $_SERVER) ? $_SERVER['HTTP_REFERER'] : '/';
        header('Location: ' . $url);

        return view('todo');
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

    /**
     * @return mixed
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @param mixed $complete
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
