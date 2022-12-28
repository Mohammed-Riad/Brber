<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
   
    public function index()
    {
        $user = User::all();
        return view('Admin.Users.UsersAdmin', compact('user'));
    }
    // Show Register Form
    public function create()
    {
        return view('Admin.Users.AddUser');
    }

    // Create New User
    public function store(Request $request)
    {
//    dd($request->all());
        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'phone' => ['required', 'min:3'],
                'address' => ['required', 'min:3'],
                'role' =>  ['required'],
                'email' => ['required', 'unique:users'],
                'password' => 'required',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );

       
        //Assign the new values
       

        // Hash Password
        $formFields['password'] = Hash::make($formFields['password']);

        // dd($request->all()); 
        // Create user
        $user = User::create($formFields);

        // Create a Registration Event for Email Verification
    
        // Login
      

        return redirect('usersdash');
        // return redirect('/email/verify');
    }


    public function destroy($id) {
        $User= User::find($id)->delete();
        return redirect('usersdash');
       
     }
    //  Show Login Form




    
    public function edit($id) {
        
        $user= User::find($id);
         return view('Admin.Users.EditUser', compact('user'));
          
     }

     public function update(Request $request,$id) {

        
        $request->validate(
            [
                'name' => ['required', 'min:3'],
                'phone' => ['required', 'min:3'],
                'address' => ['required', 'min:3'],
                'role' =>  ['required'],
                'email' => ['required', 'unique:users'],
                'password' => 'required',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );

            $user= User::find($id);
            $user->update(
            [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'role' => $request->role,
                    'email' => $request->email,
                    'password' => $request->password,

            ]);


            return redirect('usersdash');
  
     }



  
    
}
