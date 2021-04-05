<?php

namespace App\Http\Controllers\Auth;

use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
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

    public function username()
    {
        return 'username';
    }

    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     throw ValidationException::withMessages([
    //         'username' => [trans('auth.failed')],
    //     ]);
    // }

    // public function username()
    // {
    //     $login = request()->input('username');
    //     $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     request()->merge([$field => $login]);
    //     return $field;
    // }
}
