<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;

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
        $this->middleware('guest')->except('logout'); //will construct except user log out, will back to home page
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            $data = User::where('email', 'like', $request->email)->first();
            $request->session()->put('user', $data['name']);
            $request->session()->put('userEmail', $data['email']);

            Session::put('is_login', '1');

            return redirect()->intended('/home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
