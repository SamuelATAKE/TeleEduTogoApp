<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForumRequest;
use App\Http\Requests\UpdateForumRequest;
use App\Models\Forum;
use App\Models\ForumCategory;
use App\Models\Level;
use App\Services\ForumService;

class ForumController extends Controller
{

    private ForumService $forumService;

    public function __construct(ForumService $forumService)
    {
        $this->forumService = $forumService;
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display categories on forum main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = $this->forumService->getCategoriesWithForums();
        return view('pages.forums.general', compact('forums'));
    }

    public function indexCatDetails($slug)
    {
        $category = ForumCategory::firstWhere('slug', $slug);
        $categories = ForumCategory::all();
        $forums = $this->forumService->getForumsByCategory($category->id);
        return view('pages.forums.category_deatils', compact('forums', 'category', 'categories'));
    }

    /**
     * Details of forum
     *
     *
     */
    public function showForumDetails($slug)
    {
        $forum = Forum::firstWhere('slug', $slug);
        return view('pages.forums.details', compact('forum'));
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
     * @param  \App\Http\Requests\StoreForumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForumRequest  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
