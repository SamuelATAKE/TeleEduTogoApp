<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentsImagesRequest;
use App\Http\Requests\UpdateCommentsImagesRequest;
use App\Models\CommentsImages;

class CommentsImagesController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentsImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentsImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentsImages  $commentsImages
     * @return \Illuminate\Http\Response
     */
    public function show(CommentsImages $commentsImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentsImages  $commentsImages
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentsImages $commentsImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentsImagesRequest  $request
     * @param  \App\Models\CommentsImages  $commentsImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentsImagesRequest $request, CommentsImages $commentsImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentsImages  $commentsImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentsImages $commentsImages)
    {
        //
    }
}
