<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestUser;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::whereRaw(1);

        $users = $users->orderBy('id','DESC')->paginate(10);

        $viewData = [
            'users' => $users
        ];

        return view('admin::user.index',$viewData);
    }

    public function edit($id)
    {
        if($id) $user = User::find($id);

        return view('admin::user.edit',compact('$user'));
    }

    public function update(RequestUser $request)
    {
        $id = $request->id;
        $user = new User();
        if ($id) $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');

            if(isset($file['name'])){
                $user->avatar = $file['name'];
            }
        }
        $user->save();

        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
