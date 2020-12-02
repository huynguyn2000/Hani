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
        $articles = Article::all();

        $viewData = [
          'articles' => $articles
        ];

        return view('about.about',$viewData);
    }
}
