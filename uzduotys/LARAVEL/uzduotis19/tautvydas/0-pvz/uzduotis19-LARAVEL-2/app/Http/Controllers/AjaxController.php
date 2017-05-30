<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\doctor;

class AjaxController extends Controller {

   public function doctorsList(){
      $users = doctor::all();

      // $array [] = (array) $users;
      return response()->json( array('doctors'=> $users), 200);
   }
}
