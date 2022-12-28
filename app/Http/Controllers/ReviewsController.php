<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Reviews;
use App\Models\User;
  use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    //

    public function index($id)
    {
        $contacts = $user = DB::table('reviews')->where('user_id', 'John')->first();
        return view('Admin.Contacts.ContactDashbord', compact('contacts'));
    }
    public function create()
    {

        return view('Home.barber');
    }



    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'rating1' => 'required',
                'commentText' => 'required',
            ]

        );
       

        $newReviews = Reviews::create(
            
            [
            'barber_id'=>$request->barber_id,
            'user_id'=>Auth::user()->id,
            'ratings' => $request->rating1,
            'messages' => $request->commentText,
        ]);
        return back();
        // ->with('message', 'Your message was sent successfully');
    }

        public function topRatedbarber()
        {
            $topRated = DB::table('reviews')->join('barbers', 'reviews.barber_id', '=', 'barbers.id')->groupBy('barber_id')->selectRaw('avg(ratings) as avg_rating,barbers.id, barbers.name, barbers.image, barbers.address')->orderBy('avg_rating', 'desc')->limit(3)->get();

        // $topRated->with('barber');


            // return view('Home.index', compact('topRated'));
            // return view(['Home.index', 'topRateds' => $topRated]);

            return view('Home.index', [
                'topRateds'=> $topRated,
                'random'=>  Barber::all()->random(3),            
            ]);

        }

    

}