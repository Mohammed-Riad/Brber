<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barber;
use App\Models\Contacts;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class DashbordControllere extends Controller
{
    //
    public function statistics()
    {
        $users = User::all();
        $Contacts = Contacts::all();
        $Newsletter = Newsletter::all();
        $Barber = Barber::all();

     

       
        // dd($donationsView);
        return view('Admin.Dashbord.dashboard', [
            'users'          => $users,
            'Contacts'      => $Contacts,
            'Newsletter'       => $Newsletter,
            'Barber'       => $Barber,

           
        ]);
    }
}
