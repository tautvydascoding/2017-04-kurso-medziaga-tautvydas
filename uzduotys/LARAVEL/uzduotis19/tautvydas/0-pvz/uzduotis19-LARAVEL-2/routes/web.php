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
Route::get('/laravel', function(){
  return view('welcome');
});


// ======= Hospital Page ======
Route::get('/doctors',  'DoctorController@index');

// grazina visus daktaro klientus
Route::get('/doctor/{id}',  'DoctorController@showPacients');

// grazina paciento daktara
Route::get('/pacient_doctor/{pacient_id}', 'PacientsController@showDoctor');

// apdorojame Ajax uzklausa
Route::get('/getdoctors',  'AjaxController@doctorsList');

//


// Route::get('/pacients', function(){
//   $users = App\pacient::select('name', 'doctor_id')
//   ->where('doctor_id', '=', '7')
//   ->get(); // SELECT  name, docgor_id  FROM pacient WHERE  doctor_id = 7;
//
//   foreach($users as $us ){
//     echo " Pacient name : " . $us->name . "<br />";
//   }
// });
// 404
// Route::get('/{aa}', function(){
//   return view('404');
// });
//

Auth::routes();

Route::get('/home', 'HomeController@index');
