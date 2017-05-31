<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
     public function showDoctor($id){
       $doctor = doctor::find($id); // suranda pirma atitikmeni DB lentelej

       return view('doctor', compact('doctor')); // compact - pavercia jam pateiktus kintamuosius i array
     }

     public function showAll() {
           $doctors = doctor::all();  // all() - SELECT * FROM doctors; 

         // compact() - pavercia jam pateiktus kintamuosius i array
          return view('doctors', compact('doctors'));
     }
}
