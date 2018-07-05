<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'login';
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticated(Request $request, User $user)
    {

        $user->updateSession();

        $all = User::whereNotNull('session_id')->distinct()->count();
        if($all > env('APP_MAXIMUM_LOGGED_USERS')){
//            $actualSessionId = $request->session()->getId();
//            \Session::getHandler()->destroy($actualSessionId);
            \Session::save();
//            \Session::flush();
            $this->removeSession($request);
            return view('auth.toomanyusersolnine');
        }

        return redirect()->intended($this->redirectPath());
    }

    public function updateSession()
    {
        \Auth::user()->updateSession();
        return redirect()->intended($this->redirectPath());
    }

    private function removeSession(Request $request)
    {
        User::where('id',\Auth::user()->id)->update(['session_id' => null]);

        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        session()->getHandler()->destroy($request);
    }

    public function logout(Request $request)
    {

        info('logout do usuario', [\Auth::user()->id] );
        AppSession::where('user_id', \Auth::user()->id)->delete();
        $this->removeSession($request);

        return redirect('/');
    }
}
