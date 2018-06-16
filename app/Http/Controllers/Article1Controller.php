<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article1;

class Article1Controller extends Controller
{
    public function index()
    {
        return Article1::all();
    }

    public function show(Article1 $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        //print_r($request->all());
        //exit;
        $article = Article1::create($request->all());
        
        return response()->json($article, 201);
    }

    public function update(Request $request, Article1 $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article1 $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
