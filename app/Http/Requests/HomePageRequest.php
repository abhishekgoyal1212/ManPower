<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class HomePageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $current_parameter =  Route::current()->parameters()['type'];
        if($current_parameter == "banner_first"){
            return [
                'banner_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_heading' => 'required|min:4|max:50', 
                'banner_content' => 'required|min:10',
                'banner.text' => 'required',
                'banner.link' => 'required',
                'banner.link1' => 'required',
                'banner.link2' => 'required',
                'banner.link3' => 'required',
            ];
        }
        if($current_parameter == "banner_secend"){
            return [
                'banner_image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner_heading1' => 'required|min:4|max:50', 
                'banner_content1.1' => 'required|min:10',
                'banner1.text' => 'required',
                'banner1.link' => 'required', 
                'banner_content1.2' => 'required', 
                'banner1.link2' => 'required', 
                'banner1.link3' => 'required', 
            ];
        }
        if($current_parameter == "trending_section"){
            return [
                'banner_heading3' => 'required', 
                'trading_jobs' => 'required', 
            ];
        }
        if($current_parameter == "banner_fourth"){
            return [
                'heading4.heading' => 'required',
                'heading4.heading1' => 'required',
                'content4.content1' => 'required',
                'heading4.heading2' => 'required',
                'content4.content2' => 'required',
                'heading4.heading3' => 'required',
                'content4.content3' => 'required',
                'section2.text' => 'required',
                'section2.link' => 'required',
            ];
        }
        if($current_parameter == "banner_five"){
            return [
                'banner_heading5' => 'required',
                'banner_five.text' => 'required',
                'banner_five.link' => 'required',
                'banner_five.text1' => 'required',
                'banner_five.link1' => 'required',
                
                
            ];
        }
        if($current_parameter == "support_section"){
            return [
                'support.heading'=>'required',
                'support.heading1'=>'required',
                'support.heading2'=>'required',
                'support_con.content'=>'required',
                'support_con.content1'=>'required',
                'support_con.content2'=>'required',
                'support_con.content3'=>'required',
                'support_image.image'=>'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'support_image.image1'=>'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'support_image.image2'=>'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'support_button.button_text'=>'required',
                'support_button.button_text1'=>'required',
                'support_button.button_text2'=>'required',
                'support_button.button_text3'=>'required',
                'support_button.button_link'=>'required',
                'support_button.button_link1'=>'required',
                'support_button.button_link2'=>'required',
                'support_button.button_link3'=>'required',
            ];

        }
        if($current_parameter == "job_search"){
            return [
                'job_heading.first' => 'required',
                'job_heading.secend' => 'required',
                'job_heading.main' => 'required',
                'job_button.text' => 'required',
                'job_button.link' => 'required',
                'job_sector'=>'required',
                'job_location'=>'required',
            ];
        }
        if($current_parameter == "secarch_location"){
            return [
                'trending_hed.heading' => 'required',
                'trending_hed.heading1' => 'required',
                'trending.image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image6' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image7' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending.image8' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                'trending_text.text' => 'required',
                'trending_text.text1' => 'required',
                'trending_text.text2' => 'required',
                'trending_text.text3' => 'required',
                'trending_text.text4' => 'required',
                'trending_text.text5' => 'required',
                'trending_text.text6' => 'required',
                'trending_text.text7' => 'required',
            ];
        }

    }
        // public function meassages()
        //  {
        //     return [
        //         ''
        //     ];
            
        //  }
   
}
