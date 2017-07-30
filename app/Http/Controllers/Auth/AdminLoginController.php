<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Admin Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function __construct()
    {
    	$this->middleware('guest')->except('logout');
    	$this->middleware('guest:admin')->except('logout');
    }

    /*
	 * Show login form
	 */
    public function showLoginForm()
    {
    	return view('auth.admin_login');
    }

    /*
     * Validate request and attempt login
     */
    public function login(Request $request)
    {
    	//Validate request
    	$this->validate($request, [
    		'email' => "required|email",
    		'password' => "required|min:6"
    	]);

    	//Login
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		return redirect()->intended(route('posts.index'));
    	} 

    	//Login unsuccessful
        $errors = [$this->username() => trans('auth.failed')];
    	return back()->withInput($request->only('email', 'remember'))->withErrors($errors);
        //
    	//return redirect('home')->withErrors($errors);
    
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /*
     *	Logout
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('home');
    }

}
