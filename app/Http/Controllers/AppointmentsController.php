<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{


     public function approvePosts(Request $request)
    {
        // is_approved => 1
        $post = Appointments::create( $request->id);
        $post->is_approved = 1;
        $post->save();


        $unApprovedPosts = Post::with(['comments.user', 'user'])->where('is_approved', 0)->oldest()->get();
        $posts = Post::with(['comments.user', 'user'])->where('is_approved', 1)->oldest()->get();

        return response()->json([
            'status' => 200,
            'posts' => $posts,
            'unApprovedPosts' => $unApprovedPosts
        ]);
    }


    //


    ////////////

    // public function unApprovedPosts()
    // {
    //     // get all posts where is_approved = 0
    //     $posts = Post::with(['comments.user', 'user'])->where('is_approved', 0)->oldest()->get();
    //     // $posts = Post::where('is_approved', 0)->get();

    //     return response()->json([
    //         'status' => 200,
    //         'posts' => $posts,
    //     ]);
    // }
    // public function approvePosts(Request $request)
    // {
    //     // is_approved => 1
    //     $post = Post::find($request->id);

    //     $post->is_approved = 1;
    //     $post->save();


    //     $unApprovedPosts = Post::with(['comments.user', 'user'])->where('is_approved', 0)->oldest()->get();
    //     $posts = Post::with(['comments.user', 'user'])->where('is_approved', 1)->oldest()->get();

    //     return response()->json([
    //         'status' => 200,
    //         'posts' => $posts,
    //         'unApprovedPosts' => $unApprovedPosts
    //     ]);
    // }

    // public function rejectPosts(Request $request)
    // {
    //     // delete
    //     $post = Post::find($request->id);

    //     $post->delete();

    //     $posts = Post::with(['comments.user', 'user'])->where('is_approved', 0)->get();


    //     return response()->json([
    //         'status' => 200,
    //         'posts' => $posts,

    //     ]);
    // }

////////////

// Route::get('/unapprovedposts', [AdminController::class, 'unApprovedPosts']);
// Route::post('/approvepost', [AdminController::class, 'approvePosts']);
// Route::post('/rejectpost', [AdminController::class, 'rejectPosts']);


}
