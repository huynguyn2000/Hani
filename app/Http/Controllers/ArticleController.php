<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class
ArticleController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $articles = Article::simplePaginate(5);

        $viewData = [
          'articles' => $articles
        ];

        return view('about.about',$viewData);
    }

    public function getDetailArticle(Request $request)
    {
        $arrUrl = (preg_split("/(-)/i",$request->segment(2)));

       $id = array_pop($arrUrl);

       if($id){
           $articleDetail = Article::find($id);
           $article = Article::paginate(10);
       }

       $viewData = [
           'articleDetail' => $articleDetail,
           'article' => $article
       ];

       return view('about.detail',$viewData);
    }

    public function PostComment(Request $request)
    {

    }
}
