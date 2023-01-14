<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForumCategoryRequest;
use App\Http\Requests\UpdateForumCategoryRequest;
use App\Models\ForumCategory;

class ForumCategoryController extends Controller
{
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
     * @param  \App\Http\Requests\StoreForumCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumCategory  $forumCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ForumCategory $forumCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumCategory  $forumCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumCategory $forumCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForumCategoryRequest  $request
     * @param  \App\Models\ForumCategory  $forumCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForumCategoryRequest $request, ForumCategory $forumCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumCategory  $forumCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumCategory $forumCategory)
    {
        //
    }
}
