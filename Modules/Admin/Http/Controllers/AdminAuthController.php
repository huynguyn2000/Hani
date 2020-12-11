<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    public function getLogin()
    {
        return view('admin::auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::guard('admins')->attempt($credentials)){
            return redirect()->intended('admin');
        }
        $this->sendFailedLoginResponse($request);
    }

    public function postRegister(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = bcrypt($request->password);
        $admin->save();

        if($admin->id){
            return redirect()->route('admin.login');
        }
        return redirect()->back();
    }
}
