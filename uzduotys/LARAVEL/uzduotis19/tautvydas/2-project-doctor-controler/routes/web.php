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

// redirect()->route('/home');  // peradresuoja vartotoja i home page
// SQL
// ->orderBy('id')
// ->count();
// ->max('price');
// ->avg('price');
// ->select('name', 'email as user_email')->get();
// $query = DB::table('users')->select('name');
// $users = $query->addSelect('age')->get();
//  ->where('status', '>', 1)->get();
//  ->where('name', 'like', 'T%')
// ->where([
//     ['status', '=', '1'],
//     ['subscribed', '<>', '1'],
// ])
//  ->where('votes', '>', 100)
//  ->orWhere('name', 'John')
 // ->whereBetween('votes', [1, 100])->get();

//  ->where('votes', '=', 100)  OR ->where('votes', 100)
//  ->groupBy('status')
// ->join('orders', 'users.id', '=', 'orders.user_id')
// ->select('users.*', 'contacts.phone', 'orders.price')
// ->whereColumn('updated_at', '>', 'created_at')



Route::get('/', function () {
    return view('welcome');
});

// vartotojui ivedus "/gallery" -> uzkraus mano_galerija.php faila
Route::get('/gallery', function () {
    return view('mano_galerija');
});


Route::get('user/{id}', function ($id) {
    echo "Labas Tomai nr " . $id;
});

Route::get('doctors', function() {
  echo "<h1>Doctors:</h1>";
  $doctors = App\Doctor::all();  // all() - SELECT * FROM doctors;
  // print_r ($doctors);

// compact() - pavercia jam pateiktus kintamuosius i array
 return view('doctors', compact('doctors'));

  // if (View::exists('doctors')) {
  //     return view('doctors');
  //  } else {
  //     return view('404');
  // }
});


Route::get('controller-doctor/{id?}', 'DoctorController@showDoctor'  );
Route::get('controller-doctors', 'DoctorController@showAll'  );



Route::get('doctor/{id?}', function($id = 1){
     $doctor = App\Doctor::find($id); // suranda pirma atitikmeni DB lenteleje

     return view('doctor', compact('doctor')); // compact - pavercia jam pateiktus kintamuosius i array
})->where('id', '[0-9]+'); // regex - tik skaiciai leidziami






// =======ABOUT eg.========
Route::get('about', function() {
  return view('about');
});
Route::get('gallery', function() {
  return view('mano_galerija');
});
Route::get('contacts', function() {
  return view('kontaktai');
});







// ========uzduotis:1====================
// sukurti Route:: ,kuris suranda ir atspausdina gydytoja pagal pavarde
 // eg. App\Doctor::where('name', 'Tomson')->get();

Route::get('doctor/{lastname}', function($lastname){
  $doctors = App\Doctor::where('lname', $lastname)->get();
  // print_r($doctors);
  if( count(get_object_vars($doctors)) == 0)  {
    echo "Toks daktaras nedirba";
  }
  foreach ($doctors as $doctor) {
      echo "Doctor: " . $doctor->id . " ". $doctor->name . " ". $doctor->lname . " <br>";
  }
})->where('name', '[A-Za-z]+');


Route::get('testForm', function(){
    ?>
      <h1>Formos testatvimas</h1>
      <form method="GET" action="sentEmail.php">
        <input type="submit" />
        <input type="hidden" value=" <?php echo csrf_token();  ?>" name="_token" />
      </form>
    <?php
});

Route::get('pacients', 'PacientsController@showAll');

// butinai paskutintas !
Route::get('/{xxx}', function(){
  return view('404');
});



//
