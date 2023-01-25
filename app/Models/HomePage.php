<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $table = 'homepage';
    protected $appends  = ['images','json_image'];


      public function getImagesAttribute()
    {
        return  asset('public/home_img/' . $this->image);
    }

    public function getJsonImageAttribute()
    {
       if(!empty($this->image)){
        $newpath =array();
        $filepath = asset('public/home_img/');
        $images = json_decode($this->image,true);
        foreach($images as $key => $value){
          // dd($filepath.'/'.$images[$key]);
            $photos[] = $filepath.'/'.$images[$key];
          }
        return $photos;
       }
      }
    }

