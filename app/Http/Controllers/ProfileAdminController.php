<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::user()->id;



        // if user was volunteer
        if (User::find($id)) {
            // get information user when he was volunteer

            // $volunteerProject = User::find($id)->volunteer;
            return view(
                'Admin.profile',
                //get basic info for user from user_id
                [
                    'userData' => User::find($id),
                ]
            );
        } else // if user was not volunteer
        {
            // get information user when he was volunteer

            return view(
                'Admin.Profile.profile',
                //get basic info for user base user_id
                [
                    'userData' => User::find($id),
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editData()
    {
        $id = Auth::user()->id;
        return view('Admin.Profile.ProfileEditAdmin', ['userData' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateData(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
          
        ]);
   
        // dd( $request->all() );   
        // get logged in user
        $user = Auth::user();
        //Assign the new values
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;


        if ($request->hasFile('image')) {
            // dd($request);
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('image')->storeAs('Admin', $fileNameToStore);
            // dd($fileNameToStore);    


            $user->image = $fileNameToStore;

        }


        $user->save();

        return redirect('profiledash');
    }


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */


/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */


/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */



/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
}