<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('vote', 'IndexController@index')->name('vote');
Route::get('vote/{id}', 'IndexController@vote')->name('voteArtist');
Route::post('submit_vote', 'IndexController@voteArtist')->name('submit_vote');
Route::get('voteArtists', 'IndexController@votingArtists')->name('voting.artists');
Route::get('voteSportstars', 'IndexController@votingSportstars')->name('voting.sportstars');



Route::get('otp', [App\Http\Controllers\OTPController::class, 'index'])->name('otp.index');
Route::post('otp', [App\Http\Controllers\OTPController::class, 'store'])->name('otp.post');
Route::get('otp/reset', [App\Http\Controllers\OTPController::class, 'resend'])->name('otp.resend');



Route::group([ 'middleware' => ['auth:web','otp'] ], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('approval-disaproval-logs', 'HomeController@approvalDissaprovalLogs')->name('approval.disaproval.logs');
    Route::get('artists', 'HomeController@artists')->name('artists');
    Route::get('sportstars', 'HomeController@sportstars')->name('sportstars');
    Route::get('judges', 'HomeController@judges')->name('judges');
    Route::get('judges/create', 'HomeController@create_judge')->name('create_judge');
    Route::post('judges/create', 'HomeController@add_judge')->name('add_judge');

    Route::get('setting/activity', 'SettingsController@index')->name('activities');
    Route::get('setting/activity/edit/{id}', 'SettingsController@activityEdit')->name('activities.edit');
    Route::get('setting/activity/create', 'SettingsController@create')->name('activities.create');
    Route::post('setting/activity/create', 'SettingsController@store')->name('activities.store');
    Route::put('setting/activity/update/{id}', 'SettingsController@activityUpdate')->name('activities.update');
    Route::get('delete/activity/{id}','SettingsController@delete_activity')->name('activities.delete');


    Route::post('phase/activate/{id}', 'PhasesController@activatePhase')->name('phase.activate');
    Route::post('phase/deactivate/{id}', 'PhasesController@deactivatePhase')->name('phase.deactivate');

    Route::get('profile/{id}', 'HomeController@profile')->name('profile');
    Route::get('edit_profile/{id}', 'HomeController@edit_profile')->name('edit_profile');
    Route::put('edit_profile/{id}', 'HomeController@update_profile')->name('update_profile');

    Route::post('approve/{id}','HomeController@approve')->name('approve');
    Route::post('disapprove/{id}','HomeController@disapprove')->name('disapprove');
    Route::delete('delete/{id}','HomeController@delete_artist')->name('delete');


    Route::get('levels','PhasesController@index')->name('levels');
    Route::get('levels/artists/{id}','PhasesController@artistsLevel')->name('levels.artists');
    Route::get('levels/sportstars/{id}','PhasesController@sportstarsLevel')->name('levels.sportstars');

});
