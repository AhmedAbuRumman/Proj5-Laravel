<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $guarded = [''];


    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill','major_skill');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function jobpost()
    {
        return $this->hasMany('App\Models\JobPost');
    }
}
