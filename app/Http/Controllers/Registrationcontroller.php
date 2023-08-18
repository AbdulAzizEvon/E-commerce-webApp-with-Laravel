<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\Password;
use App\Models\Registrationform;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Redirect;
use Illuminate\View\View;
use Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Session;
use Illuminate\Session\Store;
// use App\User;

class Registrationcontroller extends Controller
{


    public function register():View{
        return view('register');
    }
    public function store(Request $request):RedirectResponse{

    $request->validate([
        'email' => 'required|confirmed|email',
        'email_confirmation' => 'required_with:email|same:email|email',
        'password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]+$/',
        'password_confirmation' => 'required_with:password|same:password|min:8',
    ]);
        Registrationform::create([
            'First_Name' => $request->First_Name,
            'Last_Name' => $request->Last_Name,
            'email' => $request->email,
            'email_confirmation' => $request->email_confirmation,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password_confirmation),
            'Gender' => $request->Gender,
            'birthday_day' => $request->birthday_day,
            'birthday_month' => $request->birthday_day,
            'birthday_year' => $request->birthday_year,
            'UserName' => $request->UserName
        ]);

        $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials))
            {
            $request->session()->regenerate();
            $request->session()->put('user',$credentials['email']);
            $request->session()->get('user');
            return redirect()->intended('index') ->withSuccess('You have successfully registered & logged in!');
        }
    }

    public function login()
    {

        return view('login');
    }

    public function authenticate(Request $request):RedirectResponse
    {


        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         $credentials = $request->only('email', 'password');


              if(Auth::attempt($credentials)){

                $request->session()->regenerate();
                $request->session()->put('user',$credentials['email']);
                $request->session()->get('user');
                return redirect()->intended('dashboard');
            }

        return redirect()->route("login")->withSuccess('Oppes! You have entered invalid credentials');


    }


    public function index():View {
        return view('index');
    }

    public function dashboard():View {

        return view('dashboard');
    }


    public function logout(Request $request): RedirectResponse
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->forget('user');

            $request->session()->regenerateToken();

            return redirect()->route('login');
        }


}
