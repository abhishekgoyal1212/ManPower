<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\file;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Response;

class JobSeeker extends Authenticatable
{
    use HasFactory;
    protected $table = JOBSEEKER;
    protected $guard = 'jobseeker';
    public function Condidate_Data()
    {
    	return $this->hasOne(CondidateProfiles::class,'jobseeker_id','id');    
    }
    public function getCvAttribute($image)
    {
        if(!empty($image)){
            return asset('public/resume/'.$image);
        }else{
            return;
        }
    }
}
