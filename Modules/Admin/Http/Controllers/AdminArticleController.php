<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestArticle;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;


class AdminArticleController extends Controller
{
    public function index(Request $request){

        $articles = Article::whereRaw(1);

        if($request->name)
            $articles->where('a_name', 'like', '%' . $request->name . '%');

        $articles = $articles->paginate(10);

        $viewData = [
            'articles' => $articles
        ];
        return view('admin::article.index',$viewData);
    }

    public function create()
    {
        return view('admin::article.create');
    }

    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin::article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request, $id);

        return redirect()->back();
    }

    public function insertOrUpdate($request, $id = '')
    {
        $article = new Article();
        if ($id) $article = Article::find($id);

        $article->a_name = $request->a_name;
        $article->a_slug = str_slug($request->a_name);
        $article->a_content = $request->a_content;

        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');

            if(isset($file['name'])){
                $article->a_avatar = $file['name'];
            }
        }
        $article->save();
    }

    public function action($action,$id)
    {
        if($action){
            $article = Article::find($id);
            switch($action){
                case 'delete':
                    $article->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
