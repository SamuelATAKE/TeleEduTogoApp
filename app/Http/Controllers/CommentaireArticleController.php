<?php

namespace App\Http\Controllers;

use App\Models\CommentaireArticle;
use App\Services\CommentaireArticleService;
use Illuminate\Http\Request;

class CommentaireArticleController extends Controller
{
    private $commentaireArticleService;

    public function __construct(CommentaireArticleService $commentaireArticleService)
    {
        $this->commentaireArticleService = $commentaireArticleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $this->commentaireArticleService->validateStoreRequest();
        $newCommentaire= $this->commentaireArticleService->addCommentaire($input);
        // dd($newCommentaire);
        $newCommentaire->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentaireArticle  $commentaireArticle
     * @return \Illuminate\Http\Response
     */
    public function show(CommentaireArticle $commentaireArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentaireArticle  $commentaireArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentaireArticle $commentaireArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentaireArticle  $commentaireArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentaireArticle $commentaireArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentaireArticle  $commentaireArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentaireArticle $commentaireArticle)
    {
        //
    }
}
