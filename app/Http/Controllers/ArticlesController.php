<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function View_All(){
        $article = Articles::latest()->get();

        return view('adminArticles', [
            'articles' => $articles,
        ]);
    }
}
