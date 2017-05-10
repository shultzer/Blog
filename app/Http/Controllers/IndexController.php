<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $users=[
'John'=>'12',
'Alex'=>'24',
'Pamella'=>'40'];

   public function index ()
   {



       return view('index', ['users' => $this->users]);
   }
    public function show_user ($user)
    {
        $age=$this->users[$user];
        return view('profiles.index', ['user'=>$user,
                                    'age'=>$age,
                                    'users'=>$this->users]);
    }

    /**
     * @return array
     */
    public function getUsers (): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUsers (array $users)
    {
        $this->users = $users;
    }
}
