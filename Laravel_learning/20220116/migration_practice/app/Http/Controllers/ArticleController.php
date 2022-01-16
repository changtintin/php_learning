<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    // 以 get 的方式秀出所有資料
    public function index()
    {
        $data = Article::get();
        return response($data, Response::HTTP_OK);
    }

    // 以 get 的方式新增資料
    public function create()
    {
        $data = [
            "upload_time" => $_GET["upload_time"],
            "title" => $_GET["title"],
            "content" => $_GET["content"],
            "leave_message" => $_GET["leave_message"],
        ];

        $data = Article::create($data);
        $data = $data->refresh();
        return response($data, Response::HTTP_CREATED);
    }

    // 以 post 的方式新增資料
    public function store(Request $request)
    {
        $data = Article::create($request->all());
        $data = $data->refresh();
        return response($data, Response::HTTP_CREATED);
    }

    // 用 id 的方式秀出資料
    public function show(Article $article)
    {
        $data = Article::find($article);
        return response($data, Response::HTTP_CREATED);
    }

    // edit
    public function edit(Article $article)
    {
    }

    // put, patch 的方式更新資料
    // origin data
    // table ("ptrry table", "300x200", "20000", "wooden")
    // put : table(price = 25000)
    // table ("ptrry table", "300x200", "25000", "wooden")
    // patch :  table(price = 25000, size="", )
    // table ("", "", "25000", "")
    public function update(Request $request, Article $article)
    {
        //
    }

    // delete
    public function destroy(Article $article)
    {
        $article->delete();
        return Response(Article::get(), Response::HTTP_OK);
    }
}
