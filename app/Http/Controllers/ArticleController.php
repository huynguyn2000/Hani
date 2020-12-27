<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $articles = Article::simplePaginate(3);
        $comments = Comment::paginate(10);

        $countCMT = count($comments);
        $viewData = [
          'articles' => $articles,
            'comments' => $comments,
            'countCMT' => $countCMT
        ];

        return view('about.about',$viewData);
    }

    public function getDetailArticle($id){
        if ($id) $article = Article::find($id);

        $viewData = [
            'article' => $article,
        ];

        return view('about.detail',$viewData);
    }

    public function getArticleList(Request $request)
    {
        $articles = Article::where('a_content','like','%'.$request->searchInfo.'%')->paginate(3);

        $comments = Comment::paginate(10);

        $countCMT = count($comments);

        $viewData = [
            'articles' => $articles,
            'comments' => $comments,
            'countCMT' => $countCMT
        ];

        return view('about.about',$viewData);
    }

    public function loadComment()
    {
        $comments = Comment::paginate(10);

        $countCMT = count($comments);

        $viewData = [
            'comments' => $comments,
            'countCMT' => $countCMT
        ];

        return view('about.comment',$viewData);
    }

    public function sendComment(Request $request)
    {
        $comment = new Comment();
        $comment->cmt_name = $request->input('comment_name');
        $comment->cmt_content = $request->input('comment_content');

        $comment->save();
    }
}
