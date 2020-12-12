<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getProductList (Request $request){

        $products = Product::with('category:id,c_name');

        $productsND= [];

        $productsBySearchInfo
            = $products->where('pro_name','like','%'.$request->searchInfo.'%')
                    ->select('pro_category_id','pro_name','pro_price','pro_avatar')->get();

        //lay ra id danh muc cua san pham tim duoc
        $cateIdByProducts = $productsBySearchInfo->get(0)->only('pro_category_id');

        array_push($productsND,$productsBySearchInfo);

        $categories = DB::table('categories')->where('id',$cateIdByProducts)->select('c_name')->get();
        $countCate = count($categories);

        $viewData = [
            'productsND' => $productsND,
            'countCate' => $countCate
        ];

        return view('menu.order',$viewData);
    }

    public function getProductListCart (Request $request){
        $products = Product::with('category:id,c_name');

        $productsND= [];

        $productsBySearchInfo
            = $products->where('pro_name','like','%'.$request->searchInfo.'%')
            ->select('id','pro_category_id','pro_name','pro_price','pro_avatar','pro_slug')->get();

        //lay ra id danh muc cua san pham tim duoc
        $cateIdByProducts = $productsBySearchInfo->get(0)->only('pro_category_id');

        array_push($productsND,$productsBySearchInfo);

        $categories = DB::table('categories')->where('id',$cateIdByProducts)->select('c_name')->get();
        $countCate = count($categories);

        $viewData = [
            'productsND' => $productsND,
            'countCate' => $countCate
        ];

        return view('menu.cart',$viewData);
    }

    public function getCategories(){
        return Category::all();
    }
}
