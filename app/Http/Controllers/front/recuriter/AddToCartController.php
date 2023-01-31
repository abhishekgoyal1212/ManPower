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
        if(!empty($all_data['DeleteId'])){
        $data = Cart::where('id',$all_data['DeleteId'])->delete();
        echo "Success";
        }else{
            parse_str($all_data['cart_data'] ,$inputs);
            $id = $this->current_recuriter_data();
            $data = Cart::where('type',$inputs['type'])->first();
            if(empty($data)){
                $data = new Cart;  
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
            $cart_count = Cart::count();
                return response()->json(["success" => $cart_count]);
            }
        }
    }
}
