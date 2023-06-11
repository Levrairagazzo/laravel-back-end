<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Get all listings
Route::get('/', function () {
    return view('Listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing :: all()

    ]);
});

//Get one listing by ID
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
     
        'listing' => Listing :: find($id)

    ]);
});













//Tests
Route::get('/test', function () {
    return response("<h1>This is a test!</h1>", 200)
        ->header("Content-Type", "text/plain")
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    dd($id);
    return "The id posted was " . $id;
})->where('id','[0-9]+');

Route::get('/search', function (Request $request) {
    $age = $request->input('age');
    $city = $request->input('city');

    return $age . ' ' . $city;
});
