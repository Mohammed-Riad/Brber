<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        $newsletter = Newsletter::all();
        return view('Admin.Nwes.NewsletterDashbord', compact('newsletter'));
    }
    //
    public function create()
    {

        return view('projects.Newsletter');
    }


    public function store(Request $request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|unique:newsletters|email'

            ],
            [
                'email.unique' => 'You are already subscribed'
            ]
        );

        if ($validate->fails()) {
            return back()->with('error_message', 'This email is already subscribed to our newsletter!');
        }

        $newnewsletter = Newsletter::create([
            'email' => $request->email
        ]);
        return back()->with('message', 'Thank you for subscribing to our newsletter!');
    }

    public function destroy($id) {
        $Newsletter= Newsletter::find($id)->delete();
        return redirect('NewsletterDashbord');
       
     }
}
