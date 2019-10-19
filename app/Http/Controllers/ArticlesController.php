<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // Render a list of resources.
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    // Show a single resource.
    public function show(Article $article)
    {
       return view('articles.show', ['article' => $article]);
    }

    // Show a view to create a new resource.
    public function create()
    {
        return view('articles.create');
    }

    // Persist the new resource.
    public function store()
    {
        Article::create($this->validateArticle());

        return redirect(route('article.index'));
    }

    // Show a view to edit an existing resource.
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article' ));

    }

    // Persist the editing resource.
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());

    }

    // Delete the resource.
    public function destroy()
    {

    }

    // Validation.
    protected function validateArticle()
    {
        return request()->validate([
            'art_title'=>'required',
            'excerpt'=>'required',
            'art_body'=>'required',
            'art_image'=>'required'
        ]);

    }

}
