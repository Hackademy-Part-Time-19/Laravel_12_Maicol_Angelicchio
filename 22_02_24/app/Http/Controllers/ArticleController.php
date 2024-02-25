<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();
        $articles->load('category');
        return view ('article.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('article.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $user = Auth::user();
        $validated=$request->validated();
        $article = $user->articles()->create($validated);
        $article->user_id=auth()->user()->id;
        $article->save();
        return redirect()->back()->with('success', 'articolo inserito');
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //return view('article.modified',compact('article'))
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //$article->update('title'=>$request->title);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        $article->delete();
        return redirect()->back()->with('success', 'articolo eliminato');
    }

    public function byCategory(category $category){
        $articleByCategory=Article::where('category_id', $category->id)->get();
        $categoryName = $category->name;
        return view('article.byCategory',
        [
            'articleByCategory'=>$articleByCategory,
            'categoryName'=>$categoryName,
        ]);
    }
}
