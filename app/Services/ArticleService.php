<?php

namespace App\Services;

use App\Models\Article;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ArticleService
{


    /**
     * Get all articles.
     */
    public function getAllArticles()
    {
        $articles = Article::All();
        return $articles;
    }

    function validateStoreRequest()
    {
        $validatedInputs = Request()->validate([
            'titre' => 'required',
            'categorie' => 'required',
            'illustration' => 'required',
            'contenu' => 'required',
        ]);
        return $validatedInputs;
    }

    public function addArticle($input)
    {
        $article = new Article;
        $article->user_id = Auth::guard('web')->user()->id;

        $article->titre = $input['titre'];
        $article->categorie = $input['categorie'];
        $article->contenu = $input['contenu'];
        $article->illustration = $input['illustration'];
        // $article->save();

        return $article;
    }

    public function getArticleById($id) {
        $article = Article::firstWhere('id', $id);
        return $article;
    }
}
