<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user:id,name')->get();
        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin::transaction.index',$viewData);
    }

    public function viewOrder(Request $request,$id)
    {
        if($request->ajax()){
            $orders = Order::with('product')->where('or_transaction_id',$id)->get();

            $html = view('admin::components.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }

    public function actionTransaction($id){
        $transaction = Transaction::find($id);

        //update user
        \DB::table('users')->where('id',$transaction->tr_user_id)->increment('total_pay');
        $transaction->tr_status = Transaction::STATUS_DONE;
        $transaction->save();

        session()->flash('msg', 'Duyệt đơn hàng thành công');
        return redirect()->back();
    }

    public function deleteTransaction($id){

        $transaction = Transaction::find($id);

        $transaction->delete();

        return redirect()->back();
    }
}
