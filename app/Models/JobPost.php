<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = ['email' , 'job_title', 'job_desc', 'category_id', 'major_id' , 'recruiter_id','company_name', 'job_city', 'company_logo', 'phone' ];
    //
    // protected $primaryKey = 'job_id';
    public function recruiter(){
        return $this->belongsTo('App\Models\Recruiter')->withPivot('Job_title');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category')->withPivot('Job_cat_id');
    }
    public function major(){
        return $this->belongsTo('App\Models\Major');
    }
    public function user(){
        return $this->belongsToMany('App\Models\User', 'jobpost_user');
    }
    // public function recruiterseeker(){
    //     return $this->hasManyThrough('App\Recruiter', 'App\Seeker');
    // }


    
}