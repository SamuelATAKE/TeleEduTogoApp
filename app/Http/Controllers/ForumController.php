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
        //similarForums
        $similarForums = Forum::where('category', $forum->category)
            ->where('id', '!=', $forum->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('pages.forums.details', compact('forum', 'similarForums'));
    }

    /**
     * Peersonnal forums
     */
    public function personalForums()
    {
        $forums = $this->forumService->getPersonnalForumsWithCategories();
        $categories = ForumCategory::all();
        return view('pages.forums.self', compact('forums', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreForumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumRequest $request)
    {
        //dd($request->validated());
        $validated = $request->validated();
        $res = $this->forumService->createForum($validated);
        return redirect()->route('forum', $res->slug)->with('success', 'Forum créé avec succès');
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
