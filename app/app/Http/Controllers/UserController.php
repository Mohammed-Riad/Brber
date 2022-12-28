<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
use AutinticatesUsers;

class UserController extends Controller
//class UsersController extends Controller
{


    public function index($id)
    {
        $users = User::find($id);
        return view("User.profile", ["users" => $users]);
    }

    // Show Register Form
    public function create()
    {
        return view('User.rigsration');
    }

    // Create New User
    public function store(Request $request)
    {

        // dd($request->all());    
        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'phone' => ['required', 'min:3'],
                'address' => ['required', 'min:3'],
                'email' => ['required', 'unique:users'],
                'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );

        // Hash Password
        $formFields['password'] = Hash::make($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Create a Registration Event for Email Verification
        event(new Registered($user));

        // Login
        auth()->login($user);

        return redirect()->intended('/');
        // return redirect('/email/verify');
    }


    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    //  Show Login Form
    public function login()
    {
        return view('User.login');
    }

    // Login User
    public function authenticate(Request $request)
    {

        $remember = $request->has('remember') ? true : false;

        $formFields = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required'
        ]);

        if (Auth::attempt($formFields, $remember) && (Gate::allows('admin'))) {
            $request->session()->regenerate();

            // return redirect('/');
            return redirect('/dashboard');
        } else if (Auth::attempt($formFields, $remember) && (Gate::denies('admin'))) {
            $request->session()->regenerate();

            return redirect('/');
            // return redirect()->intended('/');
        }

        return back()->with('email', 'Wrong Email or Password');
    }
}
