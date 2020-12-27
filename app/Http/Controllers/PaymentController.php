<?php

namespace App\Http\Controllers;


use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();
class PaymentController extends CartController
{
    public function index(){
        return view('menu.payment');
    }

    public function saveInfo(Request $request){
        $totalPrice = Session::get('cart')->totalPrice+15000;
        $products = Session::get('cart')->products;

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $user = User::find(get_data_user('web'));
        $user->total_pay ++;
        $user->save();

        $transactionId = Transaction::insertGetId([
            'tr_user_id' => get_data_user('web') ? get_data_user('web') : null,
            'tr_name' => $request->name,
            'tr_total' => $totalPrice,
            'tr_note' => $request->note,
            'tr_address' => $request->address,
            'tr_phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        if($transactionId){
            foreach($products as $product){
                $toppings = '';
                if( isset($product['topping'])){
                    $length = count($product['topping']);
                    if($length != 0){
                        $toppings = $product['topping'][0];
                        for($i=1; $i < $length; $i++)
                            $toppings .= ", ".$product['topping'][$i];
                    }
                }

                $details = '';
                if( isset($product['detail'])){
                    if($product['detail'][0] == null)
                        $details = '';
                    else{
                        $details = $product['detail'][0];
                        $length = count($product['detail']);
                        for($i=1; $i < $length; $i++)
                            $details .= ", ".$product['detail'][$i];
                    }
                }

                $product_pay = Product::find($product['productInfo']->id);
                $product_pay->pro_pay += $product['quantity'];
                $product_pay->save();

                Order::insert([
                    'or_transaction_id' => $transactionId,
                    'or_product_id' => $product['productInfo']->id,
                    'or_qty' => $product['quantity'],
                    'or_price' => $product['price'],
                    'or_detail' => $details,
                    'or_topping' => $toppings,
                ]);
            }
        }
        Session::forget('cart');

        session()->flash('success', 'Đặt hàng thành công');
        return redirect('/');
    }

    public function checkCoupon(Request $request){
        $coupon = Coupon::where('cp_code',$request->coupon)->first();
        if($coupon){
            //dd($coupon);
            $count_coupon = $coupon->count();
            if($count_coupon > 0){
                //dd($count_coupon);
                $count_session = Session::get('coupon');
                //if($count_session == true) dd($count_session);
                if($count_session == true){
                    $is_available = 0;
                    if($is_available == 0){
                        $cou[] = array(
                            'cp_code' => $coupon->cp_code,
                            'cp_func' => $coupon->cp_func,
                            'cp_value' => $coupon->cp_value,
                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                        'cp_code' => $coupon->cp_code,
                        'cp_func' => $coupon->cp_func,
                        'cp_value' => $coupon->cp_value,
                    );
                    Session::put('coupon',$cou);
                }
                Session::save();
                session()->flash('msg', 'Nhập mã giảm giá thành công');
                return redirect()->back();
            }
        }
        else{
            session()->flash('error', 'Nhập mã giảm giá không thành công');
            return redirect()->back();
        }
    }

    public function unsetCoupon(){
        $coupon = Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            session()->flash('msg', 'Xóa mã giảm giá thành công');
            return redirect()->back();
        }
    }
}
