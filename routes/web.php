<?php

use App\Http\Controllers\MemberController;
use App\Models\Member;
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

Route::get('/', [MemberController::class, 'index']);
Route::get('/create', [MemberController::class, 'create']);
Route::post('/store', [MemberController::class, 'store']);
Route::delete('/delete/{id}', [MemberController::class, 'destroy']);

Route::get('men', [MemberController::class, 'menMember']);

Route::get('women', function () {
    $members = Member::all();
    $men = Member::where('gender', 'homme')->limit(3)->get();
    $women = Member::where('gender', 'femme')->get();

    return view('pages.women', compact('members', 'men', 'women'));
});

