<?php

use App\Models\User;
use Illuminate\Http\Request;
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
Route::post('/fetch', function (Request $request) {
    $request->validate([
        'search' => 'required|string|min:8'
    ]);
    $search = '%' . $request->input('search') . '%';
    

    // ->orWhere('full_name','ILIKE',$search)
    $users = User::
    where('phone_number','ILIKE',$search)->select('facebook_id','profile_url','job_title','company','female','full_name')->paginate(20);
    return view('fetch',compact('users'));
});
