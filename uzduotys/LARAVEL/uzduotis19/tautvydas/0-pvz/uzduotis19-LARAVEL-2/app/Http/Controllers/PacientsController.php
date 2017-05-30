<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacient;

class PacientsController extends Controller
{
    public function showDoctor($pacient_id) {
      $user = pacient::find($pacient_id) ;
      $mydoctor = $user->doctor;  // doctor - f-ja esanti 'pacient' Modelyje

      return view('pacientDoctor', compact('mydoctor'));
    }

}
