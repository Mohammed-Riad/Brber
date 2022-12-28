<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Reviews;
use Illuminate\Http\Request;


class BarberController extends Controller
{

    //
    public function index()
    {
        $Barber = Barber::all();
        return view('Admin.Barbers.BarbersAdmin', compact('Barber'));
    }

    public function show()
    {
        $Barber = Barber::latest()->filter(request(["search"]))->get();
        // $Barber = Barber::all();
        return view('Home.barbers', compact('Barber'));
    }



    public function destroybarber($id)
    {
        $User = Barber::find($id)->delete();
        return redirect('barberdash');
    }


    public function create()
    {
        return view('Admin.Barbers.AddBarbersDashbord');
    }

    // Create New User



    public function store(Request $request)
    {





        // get logged in user
        // $Barber = new Barber;
        // //Assign the new values
        // $Barber->name = $request->name;
        // $Barber->shopeName = $request->shopeName;
        // $Barber->phone = $request->phone;
        // $Barber->address = $request->address;
        // $Barber->description = $request->description;
        // $Barber->email = $request->email;


        $validate = $request->validate(
            [
                'name' => 'required',
                'shopeName' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'description' => 'required',
                'email' => ['required', 'unique:users'],
                'yearsofexperience' => 'required',




            ]

        );



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
            // dd( $fileNameToStore );
            $path = $request->file('image')->storeAs('Barbers', $fileNameToStore);
            // dd($fileNameToStore);    


            $validate['image'] = $fileNameToStore;

        }


        // $validate->save();
        $newcontact = Barber::create($validate);


        return redirect('barberdash');
    }


    public function editbarber($id)
    {

        $barbers = Barber::find($id);
        $reviews = Reviews::where('barber_id', $id)->with('user')->get();
        return view('Admin.Barbers.BarberEditAdmin', ['barbers' => Barber::find($id)]);

    }

    // Create New User


    public function updatebarbe(Request $request, $id)
    {


        $request->validate([
            'name' => 'required',
            'shopeName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'email' => ['required', 'unique:users'],
            'yearsofexperience' => 'required',

        ]);
        // dd($request->all());

        // dd( $request->all() );   
        // get logged in user
        $Barber = Barber::find($id);
        //Assign the new values
        $Barber->name = $request->name;
        $Barber->shopeName = $request->shopeName;
        $Barber->phone = $request->phone;
        $Barber->address = $request->address;
        $Barber->description = $request->description;
        $Barber->email = $request->email;
        $Barber->yearsofexperience = $request->yearsofexperience;



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
            $path = $request->file('image')->storeAs('Barbers', $fileNameToStore);
            // dd($fileNameToStore);    


            $Barber->image = $fileNameToStore;

        }


        $Barber->save();

        return redirect('barberdash');
    }

    public function viewNow($id)
    {
        $barber = Barber::find($id);
        $reviews = Reviews::where('barber_id', $id)->with('user')->latest()->get();
        // return view('Home.barber',['barber'=> $barber]);
        return view('Home.barber', compact('barber' , 'reviews'));


    }






}