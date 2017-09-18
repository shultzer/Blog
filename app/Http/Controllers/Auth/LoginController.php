<?php

  namespace App\Http\Controllers\Auth;

  use App\Http\Controllers\Controller;
  use App\User;
  use Illuminate\Foundation\Auth\AuthenticatesUsers;
  use Illuminate\Support\Facades\Auth;
  use Socialite;

  class LoginController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function redirectToProvider() {
      return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback() {
      $socuser  = Socialite::driver('facebook')->stateless()->user();
      $finduser = User::where('email', $socuser->email)->first();
      if ($finduser) {
        Auth::login($finduser);
        return redirect('/');
      }
      else {
        $user           = new User();
        $user->name     = $socuser->name;
        $user->email    = $socuser->email;
        $user->password = '123456';
        $user->save();
        Auth::login($user);
        return redirect('/');
      }


    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
      $this->middleware('guest')->except('logout');
    }
  }
