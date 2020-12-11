<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
session_start();

class AdminCouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::paginate(10);

        $viewData = [
          'coupons' => $coupons
        ];
        return view('admin::coupon.index',$viewData);
    }

    public function create()
    {
        return view('admin::coupon.create');
    }

    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        Session::put('message','Thêm mã giảm giá thành công');
        return redirect()->back();
    }
//
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin::coupon.edit', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request, $id);

        return redirect()->back();
    }

    public function insertOrUpdate($request, $id = '')
    {
        $coupon = new Coupon();
        if ($id) $coupon = Coupon::find($id);

        $coupon->cp_name = $request->name;
        $coupon->cp_code = $request->code;
        $coupon->cp_qty = $request->quantity;
        $coupon->cp_func = $request->function;
        $coupon->cp_value = $request->value;

        $coupon->save();
    }

    public function action($action,$id)
    {
        if($action){
            $coupon = Coupon::find($id);
            switch($action){
                case 'delete':
                    $coupon->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
