<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = ['email' , 'job_title', 'job_desc', 'category_id', 'company_name', 'job_city', 'company_logo', 'phone' ];
    //
    // protected $primaryKey = 'job_id';
    public function recruiter(){
        return $this->belongsTo('App\Recruiter')->withPivot('Job_title');
    }
    public function category(){
        return $this->belongsTo('App\Category')->withPivot('Job_cat_id');
    }
    public function user(){
        return $this->belongsToMany('App\User', 'jobpost_user');
    }
    // public function recruiterseeker(){
    //     return $this->hasManyThrough('App\Recruiter', 'App\Seeker');
    // }


    
}