<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Countries;



class HomeController extends Controller
{
    public function index_home()
    {
        $all_data = HomePage::all();
        foreach($all_data as $value){
            $json_location[] = json_decode($value['job_location'],true); 
            $json_sector[] = json_decode($value['job_sector'],true); 
            $json_data[] = json_decode($value['button'],true);
            $json_data_content[] = json_decode($value['content'],true);
            $json_data_heading[] = json_decode($value['heading'],true);
        }
        $countries = Countries::whereIn('id',$json_location[6])->get();
        return view('front.home.home-page',compact('all_data','json_data','json_data_content','json_data_heading','json_sector','countries'));
    }   
}
