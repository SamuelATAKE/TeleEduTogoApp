<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContributionsFilesRequest;
use App\Http\Requests\UpdateContributionsFilesRequest;
use App\Models\ContributionsFiles;

class ContributionsFilesController extends Controller
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
     * @param  \App\Http\Requests\StoreContributionsFilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContributionsFilesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContributionsFiles  $contributionsFiles
     * @return \Illuminate\Http\Response
     */
    public function show(ContributionsFiles $contributionsFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContributionsFiles  $contributionsFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(ContributionsFiles $contributionsFiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContributionsFilesRequest  $request
     * @param  \App\Models\ContributionsFiles  $contributionsFiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContributionsFilesRequest $request, ContributionsFiles $contributionsFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContributionsFiles  $contributionsFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContributionsFiles $contributionsFiles)
    {
        //
    }
}
