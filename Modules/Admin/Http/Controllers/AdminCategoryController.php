<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'c_name', 'c_title_seo', 'c_active')->get();
        $viewData = [
            'categories' => $categories
        ];

        return view('admin::category.index', $viewData);
    }

    public function create()
    {
        return view('admin::category.create');
    }

    public function store(RequestCategory $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin::category.edit',compact('category'));
    }

    public function update(RequestCategory $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }

    public function insertOrUpdate($request, $id = '')
    {
        $category = new Category();
        if ($id) $category = Category::find($id);

        $category->c_name = $request->name;
//        $category->c_title_seo = $request->c_title_seo ? $request->c_title_seo : $request->name;
//        $category->c_description_seo = $request->c_description_seo ? $request->c_description_seo : $request->name;

        $category->save();
    }

    public function action($action,$id)
    {
        if($action){
            $category = Category::find($id);
            switch($action){
                case 'delete':
                    $category->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
