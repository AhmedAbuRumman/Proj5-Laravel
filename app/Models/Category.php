<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'job_cat',


    ];
    // protected $primaryKey = 'id';

    public function catposts()
    {
        return $this->hasMany('App\Models\JobPost');
    }

    public function major()
    {
        return $this->hasMany('App\Models\Major');
    }
}
