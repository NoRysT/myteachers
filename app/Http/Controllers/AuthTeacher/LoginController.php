<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/admins/mypage'; //ログイン後の遷移先

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout'); //ミドルウェア変更
    }

    public function showLoginForm()
    {
        return view('teacher_auth.login'); //ログインページ
    }

    protected function guard()
    {
        return Auth::guard('teacher'); //先生用のguardに変更
    }

    public function logout(Request $request)
    {
    $this->guard()->logout();
        return redirect('/teachers/login'); //ログアウト後の遷移先
    }
}
