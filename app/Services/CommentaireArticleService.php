<?php

namespace App\Services;

use App\Models\CommentaireArticle;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CommentaireArticleService
{


    /**
     * Get all articles.
     */
    public function getAllcommentaires()
    {
        $commentaires = CommentaireArticle::All();
        return $commentaires;
    }

    function validateStoreRequest()
    {
        $validatedInputs = Request()->validate([
            'contenu' => 'required',
            'article_id' => 'required',
        ]);
        return $validatedInputs;
    }

    public function addCommentaire($input)
    {
        $commentaire = new CommentaireArticle;
        $commentaire->user_id = Auth::guard('web')->user()->id;

        $commentaire->contenu = $input['contenu'];
        $commentaire->article_id = $input['article_id'];
        // $article->save();

        return $commentaire;
    }

}
