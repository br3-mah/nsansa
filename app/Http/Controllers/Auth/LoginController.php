<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request, $user)
    {
        if ( $user->type == 'patient' ) {
            return redirect()->route('patient');
        }
        return redirect()->route('home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email',$request->email)->first();
        if(!empty($user)){
            if (!Auth::attempt($data)) {
                if($request->wantsJson()){
                    return response()->json(['error' => 'Unauthorised'], 401);
                }else{
                    return back()->withErrors([
                        "email" => "Sorry, incorrect password or username. Try again",
                    ])->onlyInput('email');
                }

            } else {
                if($request->wantsJson()){
                    auth()->login($user);
                    $token = $user->createToken('LaravelAuthApp')->accessToken;
                    return response()->json(['token' => $token, 'user'=> $user], 200);
                }else{
                    // dd('here');
                    if ($user->role == 'patient') {
                        return redirect('/counseling-center');
                    }else{
                        return redirect('/home');
                    }
                    // return back()->withErrors([
                    //     "email" => "Sorry we couldn't find an account with that username. Try again",
                    // ])->onlyInput('email');
                }
            }
        }else{
            return back()->withErrors([
                "email" => "Sorry we couldn't find an account with that username. Try again",
            ])->onlyInput('email'); 
        }
    }


    

    public function loginApi(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email',$request->email)->first();
        if(!empty($user)){
            if (!Auth::attempt($data)) {
                if($request->wantsJson()){
                    return response()->json(['error' => 'Unauthorised'], 401);
                }else{
                    return back()->withErrors([
                        "email" => "Sorry, incorrect password or username. Try again",
                    ])->onlyInput('email');
                }

            } else {
                auth()->login($user);
                $token = $user->createToken('LaravelAuthApp')->accessToken;
                return response()->json(['token' => $token, 'user'=> $user], 200);
            }
        }else{
            return back()->withErrors([
                "email" => "Sorry we couldn't find an account with that username. Try again",
            ])->onlyInput('email'); 
        }
    }
    /*
     *  Login with Username or Email
     * */
    public function username()
    {
        $identity = request()->identity;
        $field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => $identity]);
        return $field;
    }
}
