<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create() {
        return view('articles.create');
    }

    public function store(Request $r) {
        $validate = $r->validate([
            'title' => 'required|unique:articles|max:255',
            'text' => 'required',
        ]);
        $new = Article::firstOrCreate([
            'title' => $r->title,
            'category' => $r->category,
            'text' => $r->text,
        ]);
        return redirect()->back()->with('message', 'New Article Created.');
    }

    public function show($id) {
        $article = Article::firstOrFail('id', $id);
        return view('articles.show', [
            'article' => $article
        ]);
    }
}
