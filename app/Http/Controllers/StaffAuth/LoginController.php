<?php

namespace App\Http\Controllers\StaffAuth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FacilityStaffController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;

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
      
      
    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

 protected function validator(array $data)
    {
        return Validator::make($data, [
            #'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:staffs',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/staff/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('staff.guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('staff.auth.login');
    }

    
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('staff');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('staff/home');
        }


     
    }
   /** protected function authenticated(Request $request, Authenticatable $staff)
    {

        /* Your db inserts */
       // return redirect()->intended($this->redirectTo);

   // }

   
}
