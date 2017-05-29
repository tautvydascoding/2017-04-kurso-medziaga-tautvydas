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
    if (View::exists('home')) {
      return view('home');
     } else {
        return view('404');
    }
});

Route::get('/welcome', function () {
    if (View::exists('home')) {
      return view('home');
     } else {
        return view('404');
    }
});

Route::get('/welcome_user/{name?}', function($name = 'User'){
    echo "Hello $name";
});

Route::get('/login', function(){
  echo "<form action='testform' method='POST' >
             <input type='submit' value='i kita puslapi' />

             <input type='hidden' value='" . csrf_token() . "' name='_token'  />
        </form>";
} );

Route::post('/testform' , function() {
  echo "Jums pavyko nueiti i kita puslapi";
});

Route::get('/login2', function(){
  echo "<form action='testform' method='POST' >
             <input type='submit' value='i kita puslapi' />

             <input type='hidden' value='" . csrf_token() . "' name='_token'  />
             <input type='hidden' value='PUT' name='_method' />
        </form>";
} );
Route::put('/testform', function(){
    echo "Jums pavyko nueiti i kita puslapi - nuadojant PUT";
});



// ======= Hospital Page ======
Route::get('/doctor', function(){
  $user = App\doctor::first(); // doctor - musu Model class App kataloge; first() - funkcija  - kuri atlieka SQL uzklausa 'SELECT * FROM table_name LIMIT 1'
  // print_r($user);
  $name = $user->name;
  print_r($name);
});
Route::get('/doctors', function(){
  $users = App\doctor::all(); // doctor - musu Model class App kataloge;
  // print_r($users);

  foreach($users as $user) {
    echo " Doctor name: <a href='doctor/$user->id'> $user->name</a>  <br>";
  }
});


//
