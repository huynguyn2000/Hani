<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $categories = Category::select('id', 'c_name')->get();
        $countCate = count($categories);
        $productsND = [];
        for($i=0; $i<$countCate; $i++){
            $productsByCID = Product::where([
                'pro_category_id' => $categories[$i]->id,
            ])->get();
            array_push($productsND, $productsByCID);
        }

        $viewData = [
            'productsND' => $productsND,
            'categories' => $categories,
            'countCate' => $countCate
        ];

        return view('home.index',$viewData);
    }

    public function userInfo(){
        return view('user');
    }

    public function editInfo($id)
    {
        if($id) $user = User::find($id);

        return view('edit',compact('$user'));
    }

    public function updateInfo(Request $request)
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

    public function loadHistory($id){

        $transactions = Transaction::all()->where('tr_user_id',$id);
        $i = 0;

        $viewData = [
            'transactions' => $transactions,
            'i' => $i
        ];

        return view('history',$viewData);
    }
}
