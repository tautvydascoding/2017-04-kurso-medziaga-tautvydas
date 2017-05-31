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
  $name = $user->name; // 'name' - DB lenteles stulpelio pavadinimas
  print_r($name);
});
Route::get('/doctors', function(){
  $users = App\doctor::all(); // doctor - musu Model class App kataloge;
    return view('hospital_home', compact('users')); // compact - pavercia jam pateiktus kintamuosius i array
});
// grazina visus daktaro klientus, ZIURETI ZEMIAU - geresne realizacija
Route::get('/doctor/{id}', function($id) {
    echo "<h1>Doctor id: $id</h1>";
    $user = App\doctor::where('id', '=', $id)->first();
    echo "<h2>Doctor name: " . $user->name . "<br> </h2>"; // 'name' - DB lenteles stulpelio pavadinimas

    // SELECT * FROM doctors WHERE pacients.doctor_id = doctors.id
    $pacients = App\pacient::where('doctor_id', '=', $id)->get();
    echo "Pacients: <br> ";
    echo "<ul>";
        foreach($pacients as $pacient) {
              echo "<li>
                $pacient->name;
              </li>";
        }
    echo "</ul>";

    // DB::table('users')->select('name', 'email as user_email')->get();
    //select('name', 'email as user_email')->get();
});

// grazina visus daktaro klientus
Route::get('/doctor_pacients/{id}', function($id){
  $user = App\doctor::find($id);
  return view('doctor', compact('user')); 
});

// grazina paciento daktara
Route::get('/pacient_doctor/{pacient_id}', function($pacient_id){
    $user = App\pacient::find($pacient_id) ;
    $mydoctor = $user->doctor;
    echo "My doctors name is :" . $mydoctor->name;
});

Route::get('/pacient', function(){
  $user = App\pacient::find(4);
  echo "Pacient:".  $user->name . ", <br>";
  echo "Doctor id: $user->doctor_id  <br>";
});





Route::get('/{aa}', function(){
  return view('404');
});
//
