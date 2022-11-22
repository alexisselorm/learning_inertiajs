<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {

    return Inertia::render("Users/Index",[
        'users'=>User::query()
        // When user inputs a search term in the search field, query for a match
        ->when(request()->input('search'),function($query,$search){
            $query->where('name','like',"%{$search}%");
        })
        // Paginate the user records, 10 per page
        ->paginate(10)
        // Persist the query params when user changes pages. Assuming a user searched for a name that matches 30 users. The search params should be persisted when the user visits the next or previous page
        ->withQueryString()
        // Use 'through' to filter out the specific fields you want to send to the frontend. Using 'map' will override the shape of the object return by the query method
        ->through(fn($user)=>[
            'id'=>$user->id,
            'name'=>$user->name,
        ]),
        // Pass this filters prop to the frontend to persist the search term state
        'filters'=> request() ->only(['search'])
    ]);
});

Route::get('/users/create', function(){
   return Inertia::render("Users/Create");
});

Route::post('/users', function(){
    // Validate the request
    $user=request()->validate([
        'name' =>'required|max:255',
        'email' =>'required|email|max:255|unique:users',
        'password' =>'required|min:6',
    ]);
    // Create the user
    User::create($user);

    // Redirect somewhere else. Even though we're working with a javascript frontend, we do not need to send a json response. Inertia understands our redirect method and will redirect correctly.
    return redirect('/users');

 });

Route::get('/settings', function () {
    return Inertia::render("Settings");
});

Route::post('/logout',function(){
    dd(request("foo"));

});
