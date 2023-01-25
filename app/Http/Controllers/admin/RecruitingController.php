<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Recuriter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\JobseekerPassword;



class RecruitingController extends Controller
{
	public function index(Request $req)
	{
		if($req->ajax()){
			$details_data = Recuriter::where('id',$req->id)->first();
		return view('admin.alluserprofile.profile',compact('details_data'))->render();
		}else{
			$all_info =  Recuriter::all();
		return view('admin.recruiting.index',compact('all_info'));
		}		
	}
	public function add_or_edit(Request $req)
	{
		$single_info = new Recuriter;
		$id = $req->id;
		if ($id) {
			$single_info = Recuriter::where('id',$id)->first();			
		}
		return view('admin.recruiting.add-edit',compact('single_info'));
	}
	public function add_or_edit_save(Request $req)
	{
		$id = $req->id;
		$inputs = $req->all();
		$req->validate([
			'first_name' => 'required',
			'email' => 'required|unique:recruiting,email,'.$id,
			'last_name' => 'required',
			'contact' => 'required|min:10|max:12|unique:recruiting,contact,'.$id,
			'company_name' => 'required',
			'company_type' => 'required',
			'company_size' => 'required',
			'password' => 'required',
		]);
		if ($id) {
			$data = Recuriter::where('id',$id)->first();	
			$msg = 'Update';

		}else{
			$data = new Recuriter();
			$msg = 'Add and password has been send your mail';

			$mail_data = [
				"heading" => 'Hello ' . $inputs['first_name']. ' ' .$inputs[ 'last_name'].' Your Password Is Create By Admin Side',
				'link' => url('/'),
				"msg" => "Youe Profile Is Recruter Create By Admin  Click Button And Please Complate Your Proccess",
				"btn_text" => "ManPower.com",
				 "footer" => 'Your Password Is '.$inputs['password'],
			];
			 Mail::to($inputs['email'])->send(new JobseekerPassword($mail_data));
		}
		$data->first_name =  $inputs['first_name'];
		$data->last_name =  $inputs['last_name'];
		$data->email =  $inputs['email'];
		$data->contact =  $inputs['contact'];
		$data->company_name =  $inputs['company_name'];
		$data->company_type =  $inputs['company_type'];
		$data->company_size =  $inputs['company_size'];
		$data->password 	=  Hash::make($inputs['password']);
		$data->status 		=  $inputs['status'];

		if ($data->save()) {
			return redirect()->route('admin.recruiting.index')->with('flash-success', 'Recuriter Page '. $msg.' successfully');
		}else{
        	return redirect()->route('admin.recruiting.index')->with('flash-error', 'Some error occurred');
		}
	}
}
