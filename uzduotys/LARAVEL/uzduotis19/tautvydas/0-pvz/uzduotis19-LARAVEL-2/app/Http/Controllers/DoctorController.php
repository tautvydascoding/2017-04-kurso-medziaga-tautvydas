<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class DoctorController extends Controller
{

    public function index() {
        $users = doctor::all(); // doctor - musu Model class App kataloge;
  
        return view('hospital_home', compact('users')); // compact - pavercia jam pateiktus kintamuosius i array
    }
    public function showPacients($id) {
      $user = doctor::find($id);
      return view('doctor', compact('user'));
    }
}
