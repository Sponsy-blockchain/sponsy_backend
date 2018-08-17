<?php

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
    //return view('main');
    if (Auth::guest()){
        return view('auth.login');
    }else{
        return redirect('/profile');
    }
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function (){
        return redirect('/profile');
    });
    Route::get('/profile', function (\Illuminate\Http\Request $request){
        switch ($request->user()->business_type) {
            case 0:
                //return redirect()->route('profileSponsee');
                return redirect()->action('ProfileController@index');
                break;
            case 1:
                //return redirect()->route('profileSponsor');
                return redirect()->action('ProfileSponsorController@index');
                break;
        }
    })->name('profile');
    Route::get('/id{id}', 'ProfilesUsersController@show')->where('id', '[0-9]+');;
    Route::group(['middleware' => ['CheckRole:sponsee']], function () {
        Route::resource('/sponsee', 'ProfileController');
    });
    Route::group(['middleware' => ['CheckRole:sponsor']], function () {
        Route::resource('/sponsor', 'ProfileSponsorController');
    });
});