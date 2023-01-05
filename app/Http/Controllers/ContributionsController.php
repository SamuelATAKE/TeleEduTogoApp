<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContributionsRequest;
use App\Http\Requests\UpdateContributionsRequest;
use App\Models\Contributions;

class ContributionsController extends Controller
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
     * @param  \App\Http\Requests\StoreContributionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContributionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contributions  $contributions
     * @return \Illuminate\Http\Response
     */
    public function show(Contributions $contributions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contributions  $contributions
     * @return \Illuminate\Http\Response
     */
    public function edit(Contributions $contributions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContributionsRequest  $request
     * @param  \App\Models\Contributions  $contributions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContributionsRequest $request, Contributions $contributions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contributions  $contributions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contributions $contributions)
    {
        //
    }
}
