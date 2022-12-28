<?php

namespace App\Http\Controllers;




use App\Models\Contacts;
use Illuminate\Http\Request;


class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contacts::all();
        return view('Admin.Contacts.ContactDashbord', compact('contacts'));
    }
    public function create()
    {

        return view('Home.contact');
    }



    public function store(Request $request)
    {

        $validate = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]

        );

        $newcontact = Contacts::create($validate);
        return redirect('/contact');
        // ->with('message', 'Your message was sent successfully');
    }
}
