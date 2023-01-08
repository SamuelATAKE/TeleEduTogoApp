<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContributionsFilesRequest;
use App\Http\Requests\StoreContributionsRequest;
use App\Http\Requests\UpdateContributionsRequest;
use App\Models\Category;
use App\Models\Contributions;
use App\Services\CategoryService;
use App\Services\ContributionsService;

class ContributionsController extends Controller
{
    private $contributionsService;

    public function __construct(ContributionsService $contributionsService)
    {
        $this->contributionsService = $contributionsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributions = Contributions::where('is_validated', true)->orderBy('created_at', 'desc')->get();
        return view('pages.contributions.index', [
            'contributions' => $contributions,
        ]);
    }
    public function admin_index()
    {
        $contributions = Contributions::all()->reverse();
        return view('pages.admin.pages.contributions.liste', [
            'contributions' => $contributions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        CategoryService::default_category();
        $categories = Category::all();
        return view("pages.contributions.create", [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContributionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContributionsRequest $request)
    {

        $contribution = $this->contributionsService->create_contribution($request->all());

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                ContributionsFilesController::store($file, $contribution);
            }
        }

        return redirect()->route('contributions.create')->with([
            'success' => 'Votre contribution a été enregistrée.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contributions  $contributions
     * @return \Illuminate\Http\Response
     */
    public function show(Contributions $contributions)
    {
        $relateds = $contributions->Category->contributions->take(5);
        return view('pages.contributions.show', [
            'contributions' => $contributions,
            'relateds' => $relateds,
        ]);
    }
    public function admin_show(Contributions $contributions)
    {
        return view('pages.admin.pages.contributions.show', [
            'contributions' => $contributions,
        ]);
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
        foreach ($contributions->contributionsFiles as $contributionsFiles) {
            ContributionsFilesController::destroy($contributionsFiles);
        }
        $contributions->delete();
        return redirect()->route('admin.contributions.list');
    }

    public function non_validated()
    {
        $contributions = Contributions::where('is_validated', false)->get();
        return view('pages.admin.pages.contributions.liste', [
            'contributions' => $contributions,
        ]);
    }

    public function validation(Contributions $contributions)
    {
        $this->contributionsService->contribution_validation($contributions);
        return redirect()->route('admin.contributions.list');
    }

    public function like(Contributions $contribution) {
        $this->contributionsService->contribution_like($contribution);
    }

    public function dislike(Contributions $contribution) {
        $this->contributionsService->contribution_dislike($contribution);
    }
}
