<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashbordControllere;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ProfileAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|a
*/

// ---------------------Routes for Home-----------------------------

// Route::get('/jafer/{/}',function(){
// return redirect('/');
// });
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('Home.index');
})->missing(function () {
    return to_route('/');
});

Route::get('/about', function () {
    return view('Home.about');
});

// Route::get('/contact', function () {
//     return view('Home.contact');
// });

// Route::get('/barbers', function () {
//     return view('Home.barbers');
// });


// Route::get('/barber', function () {
//     return view('Home.barber');
// });

Route::get('/barbers', [BarberController::class, 'show']);

// ---------------------Routes for End Home-----------------------------




// ---------------------Routes for Registration-----------------------------
// // Show Register Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users/store', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('users/authenticate', [UserController::class, 'authenticate']);



// ---------------------Routes for End Registration-----------------------------



// --------------------Profile-----------------------------

Route::get('editProfile', [ProfileController::class, 'editData'])->middleware('auth');

Route::post('update', [ProfileController::class, 'updateData'])->middleware('auth');

Route::get('profile', [UserController::class, 'show'])->middleware('auth');

// ---------------------End for Profile-----------------------------


// Route::post('/profile', [UserController::class, 'logout']);

// -------------------------------------------------------------------------






// --------------------DashBord-----------------------------


Route::get('ContactDashbord', [ContactsController::class, 'index'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('NewsletterDashbord', [NewsletterController::class, 'index'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('/dashboard', [DashbordControllere::class, 'statistics'])->middleware(['admin', 'can:admin'])->middleware('auth');


// --------------------End DashBord-----------------------------


// --------------------AdminUserController DashBord-----------------------------


Route::get('/profiledash', function () {
    return view('Admin.Profile.profile');
    if (Auth::User())
        return view('/');
})->middleware(['admin', 'can:admin'])->middleware('auth');


route::get('usersdash', [AdminUserController::class, 'index'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('/Adduser', [AdminUserController::class, 'create'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::post('AddDash', [AdminUserController::class, 'store'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('delete/{id}', [AdminUserController::class, "destroy"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('edit/{id}', [AdminUserController::class, "edit"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::put('/update/{id}', [AdminUserController::class, "update"])->middleware(['admin', 'can:admin'])->middleware('auth');

// -------------------- End AdminUserController DashBord-----------------------------




// --------------------Profile DashBord-----------------------------

Route::get('editprofile/{id}', [ProfileAdminController::class, "editdata"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::post('/update/{id}', [ProfileAdminController::class, "updateData"])->middleware(['admin', 'can:admin'])->middleware('auth');

// --------------------Profile End -----------------------------




// -------------------- BarberController DashBord-----------------------------
route::get('barberdash', [BarberController::class, 'index'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('deletebarber/{id}', [BarberController::class, "destroybarber"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('/AddBarbers', [BarberController::class, "create"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::post('/StoreBarbers', [BarberController::class, 'store'])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('editbarber/{id}', [BarberController::class, "editbarber"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::post('/updatebarber/{id}', [BarberController::class, "updatebarbe"])->middleware(['admin', 'can:admin'])->middleware('auth');
Route::get('/barber/{id}', [BarberController::class, "viewNow"]);

// --------------------End BarberController -----------------------------



// -------------------- Contact -----------------------------

route::get('contact', [ContactsController::class, 'create']);

route::post('contact', [ContactsController::class, 'store'])->middleware('auth');
;


// -------------------- End  Contact ---------------------------



// --------------------newsletter-----------------------------



// Create New newsletter
route::post('newsletterform', [NewsletterController::class, 'store'])->middleware(['admin', 'can:admin'])->middleware('auth');
route::get('newsletter', [NewsletterController::class, 'create'])->middleware(['admin', 'can:admin'])->middleware('auth');
// Route::get('delete/{id}', [NewsletterController::class, "destroy"]);

// --------------------End newsletter-----------------------------

// Route::group(["middleware" => "admin"], function(){

// });
// --------------------Reviews-----------------------------

Route::get('/addReviews', [ReviewsController::class, 'create'])->middleware('auth');
Route::post('/Reviews', [ReviewsController::class, 'store'])->middleware('auth');

Route::get('/home', [ReviewsController::class, 'topRatedbarber']);
// --------------------end Reviews-----------------------------



Route::get("/search", [BarberController::class, "show"])->name("search");









Route::post('/approvepost', [AppointmentsController::class, 'approvePosts']);
