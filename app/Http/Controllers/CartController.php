<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class CartController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $categories = Category::select('id', 'c_name')->get();

        $even = [];
        $odd = [];

        $countProductEven = [];
        $countProductOdd = [];

        $countCate = count($categories);

        $productsND = [];
        for ($i = 0; $i < $countCate; $i++) {
            $productsByCID = Product::where([
                'pro_category_id' => $categories[$i]->id,
            ])->get();
            array_push($productsND, $productsByCID);
        }

        for ($i = 0; $i < $countCate; $i++) {
            if ($i % 2 == 0) {
                $categoriesbyID = Category::where([
                    'id' => $categories[$i]->id,
                ])->get();
                $countProduct = count($productsND[$i]);
                array_push($countProductEven, $countProduct);
                array_push($even, $categoriesbyID);
            }

            if ($i % 2 != 0) {
                $categoriesbyID = Category::where([
                    'id' => $categories[$i]->id,
                ])->get();
                $countProduct = count($productsND[$i]);
                array_push($countProductOdd, $countProduct);
                array_push($odd, $categoriesbyID);
            }
        }

        $viewData = [
            'even' => $even,
            'odd' => $odd,
            'countProductEven' => $countProductEven,
            'countProductOdd' => $countProductOdd,
            'categories' => $categories,
            'productsND' => $productsND,
            'countCate' => $countCate
        ];

        return view('menu.cart', $viewData);
    }

    public function AddCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            //1 session key la` Cart, object la $newCart
            $request->session()->put('cart', $newCart);
        }

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function DeleteItemCart(Request $request, $id)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(count($newCart->products) > 0){
            $request->Session()->put('cart',$newCart);
        }
        else{
            $request->Session()->forget('cart');
        }

        return view('menu.shoppingcart', compact('newCart'));
    }
}
