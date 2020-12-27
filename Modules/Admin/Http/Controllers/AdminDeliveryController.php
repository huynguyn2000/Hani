<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminDeliveryController extends Controller
{
    public function index()
    {
        //$transactions = with('user:id,name');

        $transactions = Transaction::where('tr_status','1')->get();

        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin::delivery.index',$viewData);
    }

    public function actionTransaction($id){
        $transaction = Transaction::find($id);

        //update user
        \DB::table('users')->where('id',$transaction->tr_user_id)->increment('total_pay');
        $transaction->tr_delivery = Transaction::STATUS_DONE;
        $transaction->save();

        session()->flash('msg', 'Đơn hàng đã hoàn thành');
        return redirect()->back();
    }
}
