<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function authenticate(Request $request){
    //     // Inputan yg diambil
    //     $credentials = $request->only('username', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Jika berhasil login

    //         return redirect()->route('dashboard');

    //         //return redirect()->intended('/details');
    //     }
    //     // Jika Gagal
    //     return redirect('login');
    // }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
