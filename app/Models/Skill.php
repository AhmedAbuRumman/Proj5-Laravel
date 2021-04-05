<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function majors()
    {
        return $this->belongsToMany('App\Models\Major','major_skill');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User','skill_user');
    }
    
}
