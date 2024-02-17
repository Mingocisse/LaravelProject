<?php

use App\Http\Controllers\ListingController;
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

// Common Resources Routes:
//index - show all listings
//show- show single listing
//create- show form to create a new listing
//store - Store new listing
//edit- show form to edit a listing
//update- show form to update a listing
//destroy - delete a listing


//All listing 
Route::get('/',[ListingController::class, 'index'] );


// show create form
Route::get('listings/create', [ListingController::class,'create']);

//Store listing Data
Route::post('/listings',[ListingController::class, 'store']);


//Single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//