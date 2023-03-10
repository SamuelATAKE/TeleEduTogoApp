<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContributionsFilesRequest;
use App\Http\Requests\UpdateContributionsFilesRequest;
use App\Models\Contributions;
use App\Models\ContributionsFiles;
use App\Services\ContributionsFilesService;
use Illuminate\Support\Facades\Storage;

class ContributionsFilesController extends Controller
{
    private $contributionsFilesService;

    public function __construct(ContributionsFilesService $contributionsFilesService)
    {
        $this->contributionsFilesService = $contributionsFilesService;
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
     * @param  \App\Http\Requests\StoreContributionsFilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public static function store($file, Contributions $contribution)
    {
        ContributionsFilesService::create_contributions_file($file, $contribution);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContributionsFiles  $contributionsFiles
     * @return \Illuminate\Http\Response
     */
    public function show(ContributionsFiles $contributionsFiles)
    {
        return response()->download(public_path($contributionsFiles->file_path . $contributionsFiles->file_name));
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
    public static function destroy(ContributionsFiles $contributionsFiles)
    {
        $contributionsFiles->delete();
    }
}
