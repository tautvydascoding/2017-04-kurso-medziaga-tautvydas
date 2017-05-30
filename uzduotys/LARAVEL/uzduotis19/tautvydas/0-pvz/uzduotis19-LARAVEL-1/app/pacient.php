<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacient extends Model
{

    // f-jos pavadinimas !!!! PRIVALO SUTAPTI SU TABLE/MODEL NAME !!!! (tik belongsTo )
    public function doctor () {
      return $this->belongsTo('App\doctor');
    }
}
