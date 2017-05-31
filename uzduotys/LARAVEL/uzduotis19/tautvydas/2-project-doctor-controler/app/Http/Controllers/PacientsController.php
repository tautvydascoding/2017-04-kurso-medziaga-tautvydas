<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacient;

class PacientsController extends Controller
{
  public function showAll () {

          $pacients = pacient::all();  // all() - SELECT * FROM doctors;
          foreach( $pacients as $pac) {
            echo  $pac->id . " " . $pac->name . " <br />";
          }
        // compact() - pavercia jam pateiktus kintamuosius i array
        //  return view('doctors', compact('doctors'));
  }


}
