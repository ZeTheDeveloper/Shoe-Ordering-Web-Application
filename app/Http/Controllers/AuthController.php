<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth\login');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect("home");
    }
}
