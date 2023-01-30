<?php

namespace App\Http\Controllers\front\recuriter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class AddToCartController extends Controller
{
    public function add_to_cart(Request $req)
    {
        $all_data = $req->all();
        parse_str($all_data['cart_data'] ,$inputs);
		$id = $this->current_recuriter_data();
        $data = Cart::where('recruiter_id',$id->id)->first();
        if(empty($data)){
            $data =  new Cart;  
        }
        $data->recruiter_id = $id->id;
        $data->type = $inputs['type'];
        $data->price = $inputs['price'];
        if(!empty($data->quantity)){
            $data->increment('quantity',$inputs['qty']);
        }else{
            $data->quantity = (int)$inputs['qty'];
        }
        $data->save = $inputs['save'];
        if($data->save()){
            return response()->json(["succes" => $data]);
        }
    }
}
