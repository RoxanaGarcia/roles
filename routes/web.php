<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\usuarioperm\Models\Role;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
/*return  Role::create([
       'name'=>'Admin',
       'slug'=>'admin',
       'decription'=>'Administrador',
       'full-access'=>'yes',
       ]);*/
       /*return  Role::create([
        'name'=>'Guest',
        'slug'=>'guest',
        'decription'=>'guest',
        'full-access'=>'no',
        ]);     
*/
/*return  Role::create([
    'name'=>'Test',
    'slug'=>'test',
    'decription'=>'test',
    'full-access'=>'no',
    ]);*/

  $user = User::find(1);
  $user->roles()->sync([1,2]);
  return $user->roles;

   
});