<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function recruiterProfile(){

        return $this->belongsTo('App\Recruiter');

    }
    public function seekerProfile(){

        return $this->belongsTo('App\Seeker');

    }
}
