<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
      public function myPacients () {
        // kreipesi i DB: 'pacient' lentele, ir grazina  visus paciantus kuriu doctor_id yra lygus sio daktaro id
          return $this->hasMany('App\pacient');
      }
}
