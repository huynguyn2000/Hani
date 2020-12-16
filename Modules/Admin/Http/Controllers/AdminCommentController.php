<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\Promise\all;

class AdminCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $viewData = [
            'comments' => $comments
        ];

        return view('admin::comment.index', $viewData);
    }

    public function action($action,$id)
    {
        if($action){
            $comments = Comment::find($id);
            switch($action){
                case 'delete':
                    $comments->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
