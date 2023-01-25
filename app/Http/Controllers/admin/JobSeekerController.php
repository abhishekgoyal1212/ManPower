<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\RECURITER;
use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use File;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobseekerPassword;

class JobSeekerController extends Controller
{
	public function index(Request $req)
	{
		if($req->ajax()){
			$details_data = JobSeeker::where('id',$req->id)->first();
		return view('admin.alluserprofile.profile',compact('details_data'))->render();
		}else{
			$all_info =  JobSeeker::all();
			return view('admin.jobseeker.index',compact('all_info'));
		}
	}
	public function add_or_edit(Request $req)
	{
		$single_info = new JobSeeker;
		$id = $req->id;
		if ($id) {
			$single_info = JobSeeker::where('id',$id)->first();			
		}
		return view('admin.jobseeker.add-edit',compact('single_info'));
	}
	public function add_or_edit_save(Request $req)
	{
		$id = $req->id;
		$inputs = $req->all();
		if(!empty($id)){
			$cvData = '';
		}else{
			$cvData = "required|mimes:doc,docx,pdf";
		}
		   $req->validate([
				'email' => 'required|unique:jobseeker,email,'.$id,
                'first_name' => 'required|min:3|max:15',
                'last_name' => 'required|min:3|max:15',
               	'mobile' => 'required|min:10|max:12|unique:jobseeker,mobile,'.$id,
				'cv' => $cvData,
                'password' => 'required',
            ]); 
		if ($id) {
			$data = JobSeeker::where('id',$id)->first();	
			$msg = 'Update';	

		}else{
			$data = new JobSeeker();
			$msg = "Add and password has been send your mail";
			$mail_data = [
				"heading" => 'Hello ' . $inputs['first_name']. ' ' .$inputs[ 'last_name'].' Your Password Is Create By Admin Side',
				'link' => url('/'),
				"msg" => "Youe Profile Is JobSeeker Create By Admin Click Button And Please Complate Your Proccess",
				"btn_text" => "ManPower.com",
				 "footer" => 'Your Password Is '.$inputs['password'],
			];
			 Mail::to($inputs['email'])->send(new JobseekerPassword($mail_data));
		}
		if ($req->hasfile('cv')) {
            $image_name = md5(rand(1000, 10000));
            $file = $req->file('cv');
            $extenstion = $file->getClientOriginalExtension();
            $filename = $image_name . time() . '.' . $extenstion;
            $file->move('public/resume/', $filename);
			$filepath = 'public/resume/'.$data->cv;
			if(File::exists($filepath)){
				unlink($filepath);
			}
            $data->cv = $filename;
        }
		$data->first_name =  $inputs['first_name'];
		$data->last_name =  $inputs['last_name'];
		$data->email =  $inputs['email'];
		$data->mobile =  $inputs['mobile'];
		$data->password 	=  Hash::make($inputs['password']);
		$data->status 		=  $inputs['status'];

		if ($data->save()) {
        	return redirect()->route('admin.jobseeker.index')->with('flash-success', 'JobSeeker Page ' .$msg. ' Successfully');
		}else{
        	return redirect()->route('admin.jobseeker.index')->with('flash-error', 'Some error occurred');
		}
	}
}
