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
  print_r ($doctors);

  // if (View::exists('doctors')) {
  //     return view('doctors');
  //  } else {
  //     return view('404');
  // }
});



Route::get('doctor/{id?}', function($id = 1){
    //  $doctors


})->where('id', '[0-9]+'); // regex - tik skaiciai leidziami
// ->where('name', '[A-Za-z]+');





Route::get('testForm', function(){
    ?>
      <h1>Formos testatvimas</h1>
      <form method="GET" action="sentEmail.php">
        <input type="submit" />
        <input type="hidden" value=" <?php echo csrf_token();  ?>" name="_token" />
      </form>


    <?php
});




//
