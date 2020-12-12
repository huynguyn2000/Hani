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
    public $totalPrice = 0;

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

    public function AddCart(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');
        $detail = $request->input('detail');
        $i = $request->input('i');

        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id, $quantity, $detail, $i);
            $this->totalPrice += $newCart->totalPrice;

            //1 session key la` Cart, object la $newCart
            $request->session()->put('cart', $newCart);
        }

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function AddCartWithTopping(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');
        $topping = $request->input('topping');
        $detail = $request->input('detail');
        $i = $request->input('i');

        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCartWithTopping($product, $id, $quantity, $topping, $detail, $i);

            //1 session key la` Cart, object la $newCart
            $request->session()->put('cart', $newCart);
        }

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function DeleteItemCart(Request $request, $stt)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($stt);

        if(count($newCart->products) > 0){
            $request->Session()->put('cart',$newCart);
        }
        else{
            $request->Session()->forget('coupon');
            $request->Session()->forget('cart');
        }

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function IncreaseItemCart(Request $request,$stt)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->IncreaseItemCart($stt);

        $request->session()->put('cart', $newCart);

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function DecreaseItemCart(Request $request, $stt)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DecreaseItemCart($stt);

        if(count($newCart->products) > 0){
            $request->Session()->put('cart',$newCart);
        }
        else{
            $request->Session()->forget('coupon');
            $request->Session()->forget('cart');
        }

        return view('menu.shoppingcart', compact('newCart'));
    }

    public function DeleteAllItemCart(Request $request)
    {
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteAllItemCart();

        $request->Session()->forget('coupon');
        $request->Session()->forget('cart');

        return view('menu.shoppingcart', compact('newCart'));
    }
}
