<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = $this->articleService->getAllArticles();
        $l = $articles->count();
        $lastArticle = $articles[$l-1];
        return view('pages.blog.index', compact('articles', 'lastArticle'));
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
        // dd('ok');
        request()->validate([
            'titre' => 'required',
            'categorie' => 'required',
            'illustration' => 'required',
            'contenu' => 'required'
        ]);

        $input = $this->articleService->validateStoreRequest();

        // if ($request->file()) {
        //     if ($logo = $request->file('logo')) {
        //         $nomIllustration = time() . '_logo_' . request('titre');
        //         $cheminFichierIllustration = $logo->storeAs('blog_images', $nomIllustration, 'public');
        //         $input['illustration'] = '/storage/' . $cheminFichierIllustration;
        //     }
        // }
        $input['illustration'] = $request->file('illustration')->store('blog_images');
        // dd($input);

        $newArticle = $this->articleService->addArticle($input);
        // dd($newArticle);
        $newArticle->save();

        return redirect(route('blog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
        $article = $this->articleService->getArticleById($id);
        $numArticle = $article->commentaires->count();
        return view('pages.blog.details', compact('article', 'numArticle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
