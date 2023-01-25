<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\CondidateProfiles;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function Admin()
    {
        $Admin = Auth::guard('admin');
        return $Admin;
    }
    public function current_jobseeker_data()
    {
        $current_job_data = Auth::guard('jobseeker')->user();
        return $current_job_data;
    }
    public function current_recuriter_data()
    {
        $current_employer_data = Auth::guard('employer')->user();
        return $current_employer_data;
    }
    public function current_condidate_data()
    {
        $current_data = Auth::guard('jobseeker')->user();
        $candidate_data = CondidateProfiles::where('jobseeker_id',$current_data->id)->first();
        return $candidate_data;
    }
}
