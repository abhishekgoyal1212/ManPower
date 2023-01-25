<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActiveInactiveController extends Controller
{
    public function active_inactive(Request $req)
    {
        $inputs = $req->all();
        if($inputs['status'] == 'active'){
            $status_val = '1';
        }
        if($inputs['status'] == 'inactive'){
            $status_val = '0';
        }
        $model = '\\App\\Models\\' . $inputs['table'];
        $affeted = $model::where('id',$inputs['id'])->update(['status'=>$status_val]);
        if($affeted){
            echo 'success';
        }else{
            echo 'error';
        }
    }
}
