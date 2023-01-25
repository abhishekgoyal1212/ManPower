<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\States;
use App\Models\Countries;
use App\Models\JobSeeker;
use App\Models\CondidateProfiles;
use App\Models\CondidateExprience;
use App\Models\Qualifications;
use App\Models\AllUpdateProfils;

use Auth;
class CondidateProfile extends Controller
{
    public function condidate_profile_save(Request $req,$type = '')
    {
        $inputs =  $req->all();
        if($type == 'form-1'){
            $validator = Validator($inputs,[
                'job_title' => 'required',
                'salary' => 'required|numeric',
                'location' => 'required',
            ],[
                'location.required' => 'Please enter a town or city click add button.'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator,'cond_err')->withInput();
            }
        }
        $data = $this->current_jobseeker_data();
        if(!empty($data)){
            $candidate = CondidateProfiles::where('jobseeker_id',$data->id)->first();
            if (empty($candidate)) {
                $candidate = new CondidateProfiles();
            }
            if($type == 'form-1'){
                $candidate->jobseeker_id = $data->id;
                $candidate->job_title = $inputs['job_title']; 
                $candidate->salary = $inputs['salary']; 
                $candidate->timing = $inputs['timing'];
                if(!empty($inputs['job_type'])){
                    $candidate->job_type = json_encode($inputs['job_type'],JSON_FORCE_OBJECT); 
                } 
                if(!empty($inputs['sector'])){
                $candidate->sectors = json_encode($inputs['sector'],JSON_FORCE_OBJECT);
                } 
            }
            if($type == 'form-2'){
                // dd($inputs['employment_status']);
                if($inputs['employment_status'] == 0){
                    $candidate->employment_status = 0; 
                    $candidate->notice_period = 0; 
                }elseif($inputs['employment_status'] == 'Full-time education' || $inputs['employment_status'] == 'Unemployed'){
                        $candidate->employment_status = $inputs['employment_status'];
                        $candidate->notice_period = 0; 
                    }else{
                        $candidate->employment_status = $inputs['employment_status'];
                        $candidate->notice_period = $inputs['notice_period']; 
                    } 
                    $candidate->eligible_work = $inputs['eligible_work']; 
                    $candidate->jobseeker_id = $data->id;
                    
            }
            if($candidate->save()){
            return redirect()->back();
            };
        }else{
            return redirect()->back();
        }
    }
    public function condidate_profile()
    {
         $city = Countries::with("City", "States")->get();
        foreach ($city as $value) {
            $status_data[] = $value->States->name;
            $city_data[] = $value->City->name;
            $contries_data[] = $value->name;
        }
        $all_world_data = array_merge($status_data, $city_data, $contries_data);
        $current_data = $this->current_jobseeker_data();
        // dd($current_data);
        $candidate_data = $this->current_condidate_data();
        $candidate_exprience = CondidateExprience::where('jobseeker_id',$current_data->id)->get();
        $condidate_qualifications  = Qualifications::where('jobseeker_id',$current_data->id)->get();
        $condidate_Skills  = AllUpdateProfils::where('jobseeker_id',$current_data->id)->get();
        $json_skils = '';
        $json_languges = '';
        $item = '';
        foreach($condidate_Skills as $item){
            $json_skils = json_decode($item->skills,true);
            $json_languges = json_decode($item->languages,true);
        }

        $location_data  = '';
        $job_data  = '';
        $sector_data  = '';
        if(!empty($candidate_data)){
        $location_data = json_decode($candidate_data->work_location,true);
        $job_data = json_decode($candidate_data->job_type,true);
        $sector_data = json_decode($candidate_data->sectors,true);
        } 
        return view('front.login.candidate-profile',compact('location_data','all_world_data','candidate_data','job_data','sector_data','candidate_exprience','condidate_qualifications','json_skils','json_languges','item','current_data'));
    }
    public function location(Request $req)
    {
        $inputs = $req->all();
        $validator = Validator(
            $req->all(),
            [
                "location" => "required",
            ],
            [
                "location.required" => "Please enter a town or city.",
            ]
        );
        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()]);
        }
        $city = Countries::with("City", "States")->get();
        foreach ($city as $value) {
            $status_data[] = $value->States->name;
            $city_data[] = $value->City->name;
            $contries_data[] = $value->name;
        }
        $all_world_data = array_merge($status_data, $city_data, $contries_data);
        $locations = $inputs["location"];
        $status = [];
        foreach ($locations as $key => $location) {
            if (in_array(strtolower($location),array_map("strtolower", $all_world_data))) 
            {
                array_push($status, "Match");
            } else {
                array_push($status, "UnMatched");
            }
        }
        if (in_array("UnMatched", $status)) {
            $mainstatus = "Sorry, we didn't recognise that town, please try again.";
            return response()->json(["error_location" => $mainstatus]);
        } else {
            $data =  $this->current_jobseeker_data();
            if (!empty($data)) {
                $candidate = $this->current_condidate_data();
                if (empty($candidate)) {
                    $candidate = new CondidateProfiles();
                }
                $candidate->work_location = json_encode($inputs["location"],JSON_FORCE_OBJECT);
                $candidate->jobseeker_id = $data->id;
                $candidate->save();
            }
        }
    }
    public function candidate_experience_save(Request $req , $id = '')
    {
        $inputs = $req->all();
        if(empty($inputs['delete_data'])){
            $current_data = $this->current_jobseeker_data();
        if(!empty($current_data)){
            if(!empty($inputs['exprience_id'])){
                $candidate = CondidateExprience::where('id',$inputs['exprience_id'])->first();
            }else{
                $candidate = new CondidateExprience;
            }
            $candidate->jobseeker_id = $current_data->id;
            $candidate->job_title = $inputs['job_title'];
            $candidate->company = $inputs['company'];
            $candidate->content = $inputs['content'];
            $candidate->from_month = $inputs['from_month'];
            $candidate->from_year = $inputs['from_year'];
            $candidate->from_to_month = $inputs['from_to_month'];
            $candidate->from_to_year = $inputs['from_to_year'];
            if($candidate->save()){
                return response()->json(["succes" => $candidate]);
            }
        }
        }else{
                $candidate_elete = CondidateExprience::where('id',$inputs['delete_data'])->delete();
                echo 'Success';
        }
    }
    public function candidate_qualifications_save(Request $req)
    {
        $inputs =  $req->all();
          if(empty($inputs['delete_data'])){
            $current_data = $this->current_jobseeker_data();
            if(!empty($current_data)){
                if(!empty($inputs['qlifaction_edit'])){
                $new_data = Qualifications::where('id',$inputs['qlifaction_edit'])->first();
            }else{
                $new_data = new Qualifications;
            }
        $new_data->jobseeker_id = $current_data->id;
        $new_data->qualification_type = $inputs['qualificationValue'];
        $new_data->school = $inputs['school'];
        $new_data->university = $inputs['university'];
        $new_data->awarding = $inputs['awarding'];
        $new_data->from_month = $inputs['from_month'];
        $new_data->to_year = $inputs['to_year'];
        $new_data->subject = json_encode($inputs['subject'],JSON_FORCE_OBJECT);
        $new_data->other_degree_grade = $inputs['other_degree_grade'];
        if($new_data->save()){
            return redirect()->route('CandidateProfile');
        }else{
            return redirect()->back();
        }
    }
    }else{
        $candidate_elete = Qualifications::where('id',$inputs['delete_data'])->delete();
        echo 'Success';
    }
 }

 public function candidate_skills_save(Request $req)
 {
    $inputs = $req->all();
    $current_data = $this->current_jobseeker_data(); 
    if(!empty($current_data)){
        $new_data = AllUpdateProfils::where('jobseeker_id',$current_data->id)->first();
        if(empty($new_data)){
        $new_data = new AllUpdateProfils;
        }
    }
    $new_data->jobseeker_id = $current_data->id;
    if(!empty($inputs['languages'])){
    $new_data->languages = json_encode($inputs['languages'],JSON_FORCE_OBJECT);
    }elseif(!empty($inputs['skills'])){
    $new_data->skills = json_encode($inputs['skills'],JSON_FORCE_OBJECT);
    }elseif(!empty($inputs['cover_centent'])){
    $new_data->cover_letter = $inputs['cover_centent'];
    }elseif(!empty($inputs['personal_statement'])){
        $new_data->personal_statement = $inputs['personal_statement'];
    }elseif(!empty($inputs['driving'])){
        if(!empty($inputs['is_car'])){
            $new_data->is_car = $inputs['is_car'];
        }
        $new_data->car_driving_license = $inputs['driving'];
    }
    if($new_data->save()){
        return redirect()->route('CandidateProfile');
    }else{
        return redirect()->back();
    }
 }
}
