<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreForumImagesRequest;
use App\Http\Requests\UpdateForumImagesRequest;
use App\Models\ForumImages;

class ForumImagesController extends Controller
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
     * @param  \App\Http\Requests\StoreForumImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumImages  $forumImages
     * @return \Illuminate\Http\Response
     */
    public function show(ForumImages $forumImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumImages  $forumImages
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumImages $forumImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForumImagesRequest  $request
     * @param  \App\Models\ForumImages  $forumImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForumImagesRequest $request, ForumImages $forumImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumImages  $forumImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumImages $forumImages)
    {
        //
    }
}
