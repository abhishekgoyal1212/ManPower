<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\privacy_policy;
use App\Models\HomePage;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\file;
use App\Http\Requests\HomePageRequest;
use App\Models\Countries;
use File;



class PageController extends Controller
{
    public function index(Request $req, $type = '')
    {
        if($type == 'privacy'){
            $all_data = privacy_policy::where('page_type', 'privace_policy')->first();
            return view('admin/pages/privacy_policy',compact('all_data'));
        }if($type == 'terms_conditions'){
            $all_data = privacy_policy::where('page_type', 'terms_conditions')->first();
            return view('admin/pages/terms_conditions',compact('all_data'));
        }
    }
    public function add_edit_update(Request $req , $type = '')
    {
        $inputs = $req->all();
        $validate = $req->validate([
            'heading' => 'required|min:4|max:50', 
            'content' => 'required|min:10',
        ]);
        if($type == 'privacy'){
            $msg = 'Privacy-Policy';
            $data = privacy_policy::where('page_type', 'privace_policy')->first();
        }
        if($type == 'terms_conditions'){
            $msg = 'Terms and Conditions';
            $data = privacy_policy::where('page_type', 'terms_conditions')->first();
        }
        $data->heading = $inputs['heading'];
        $data->content = $inputs['content'];
        $data->meta_key = $inputs['meta_key'];
        $data->meta_value = $inputs['meta_value'];
        $data->meta_description = $inputs['meta_description'];
        if ($data->save())
        { 
            return redirect()->back()->with('flash-success', $msg.' Updated successfully');
        }else{
            return redirect()->back()->with('flash-success', 'Some error occurred');
        }
    }

    public function home_index()
    {
        $all_data = HomePage::all();
        $countries = Countries::all();
        foreach($all_data as $value){
            $json_location[] = json_decode($value['job_location'],true); 
            $json_sector[] = json_decode($value['job_sector'],true); 
            $json_data[] = json_decode($value['button'],true);
            $json_data_content[] = json_decode($value['content'],true);
            $json_data_heading[] = json_decode($value['heading'],true);
        };
        return view('admin.pages.home',compact('all_data','json_data','json_data_content','json_data_heading','countries','json_location','json_sector'));
    }
    public function home_page_save(HomePageRequest $req, $type = '')
    {
        $inputs = $req->all();
        if($type == "banner_first"){
            $msg = 'Banner Section First';
            $data = HomePage::where('page_type', 'banner_section1')->first();
            if($req->file('banner_image') != ''){
                $img_name = time() . '-' . Str::of(md5(time() . $req->file('banner_image')->getClientOriginalName()))->substr(0, 50) . '.' . $req->file('banner_image')->extension();
                 $req->file('banner_image')->move('public/home_img/', $img_name);
                 $file_path =   parse_url($data->image);
                 File::delete($file_path['path']);
                $data->image = $img_name;
            }
            $data->heading = $inputs['banner_heading'];
            $data->content = $inputs['banner_content'];
            $data->page_type = 'banner_section1';
            $data->button = json_encode($inputs['banner'],JSON_FORCE_OBJECT);
        }elseif($type == 'banner_secend')
        {
            $msg = 'Banner Section Secend';

            $data = HomePage::where('page_type', 'banner_section2')->first();
            if($req->file('banner_image1') != ''){
                $img_name = time() . '-' . Str::of(md5(time() . $req->file('banner_image1')->getClientOriginalName()))->substr(0, 50) . '.' . $req->file('banner_image1')->extension();
                 $req->file('banner_image1')->move('public/home_img/', $img_name);
                 $file_path =   parse_url($data->image);
                 File::delete($file_path['path']);
                $data->image = $img_name;
            }
            $data->heading = $inputs['banner_heading1'];
            $data->content = json_encode($inputs['banner_content1'],JSON_FORCE_OBJECT);
            $data->page_type = 'banner_section2';
            $data->button = json_encode($inputs['banner1'],JSON_FORCE_OBJECT);
        }elseif($type == 'trending_section'){
            $msg = 'Trending Section';
            $data = HomePage::where('page_type', 'trending_section')->first();
            $data->heading = $inputs['banner_heading3'];
            $data->job_sector = json_encode($inputs['trading_jobs'],JSON_FORCE_OBJECT);
            $data->page_type = 'trending_section';
        }elseif($type == "secarch_location"){
            $msg = ' Sector And Secarch Section';
            $data = HomePage::where('page_type', 'secarch_location')->first();
            if($req->file('trending') != ''){
                $value = json_decode($data->image,true);
                foreach($req->file('trending') as $key => $image){
                    $image_name = time() . '-' . Str::of(md5(time() . $req->file('trending')[$key]->getClientOriginalName()))->substr(0, 50) . '.' . $req->file('trending')[$key]->extension();
                    $image->move('public/home_img/', $image_name);
                    $value[$key] = $image_name; 
                }
                $data->image = json_encode($value,JSON_FORCE_OBJECT);
            }
            $data->heading = json_encode($inputs['trending_hed'],JSON_FORCE_OBJECT);
            $data->button = json_encode($inputs['trending_text'],JSON_FORCE_OBJECT);
            $data->page_type = 'secarch_location';
        }
        elseif($type == 'banner_fourth'){
            $msg = 'Section Secend';
            $data = HomePage::where('page_type', 'section2')->first();
            $data->heading = json_encode($inputs['heading4'],JSON_FORCE_OBJECT);
            $data->content = json_encode($inputs['content4'],JSON_FORCE_OBJECT);
            $data->button = json_encode($inputs['section2'],JSON_FORCE_OBJECT);
            $data->page_type = 'section2';
        }elseif($type == 'support_section'){
            $msg = 'Support Section';
            $data = HomePage::where('page_type', 'support_section')->first();
            if(empty($data)){
                $data = new HomePage;
            }
            if($req->file('support_image') != ''){
                $value = json_decode($data->image,true);
                foreach($req->file('support_image') as $key => $image){
                    $image_name = time() . '-' . Str::of(md5(time() . $req->file('support_image')[$key]->getClientOriginalName()))->substr(0, 50) . '.' . $req->file('support_image')[$key]->extension();
                    $image->move('public/home_img/', $image_name);
                    $value[$key] = $image_name; 
                }
                $data->image = json_encode($value,JSON_FORCE_OBJECT);
            }
            $data->heading = json_encode($inputs['support'],JSON_FORCE_OBJECT);
            $data->content = json_encode($inputs['support_con'],JSON_FORCE_OBJECT);
            $data->button = json_encode($inputs['support_button'],JSON_FORCE_OBJECT);
            $data->page_type = 'support_section';
        }elseif($type == 'job_search'){
            $msg = 'Job Search Section';
            $data = HomePage::where('page_type', 'job_search')->first();
            // $data = new HomePage;
            $data->heading = json_encode($inputs['job_heading'],JSON_FORCE_OBJECT);
            $data->job_sector = json_encode($inputs['job_sector'],JSON_FORCE_OBJECT);
            $data->job_location = json_encode($inputs['job_location'],JSON_FORCE_OBJECT);   
            $data->button = json_encode($inputs['job_button'],JSON_FORCE_OBJECT);   
            $data->page_type = 'job_search';
        }
        elseif($type == 'banner_five'){
            $msg = 'Section Third';
            $data = HomePage::where('page_type', 'section3')->first();
            $data->heading = $inputs['banner_heading5'];
            $data->button = json_encode($inputs['banner_five'],JSON_FORCE_OBJECT);
            $data->page_type = 'section3';
        }
        if($data->save()){
            // dd('hello');
             return back()->with('flash-success', 'Home page '. $msg .' update successfully');
        }else{
            return back()->with('flash-error', 'Some error occurred in home page');
        }
    }
}
