<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EpisodeRequest;
use App\Models\Episode;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class EpisodeController extends AdminController
{
    public function __construct()
    {
        $this->middleware('can:create_episode')->only(['create']);
        $this->middleware('can:delete_episode')->only(['destroy']);
        $this->middleware('can:edit_episode')->only(['edit', 'update']);
        $this->middleware('can:show_episode')->only(['index']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $episodes = Episode::query();
        if ($keyword = \request('search')) {
            $episodes->where('title', 'like', "%$keyword%")->orWhere('body', 'like', "%$keyword%")
                ->orWhere('id', $keyword);
        }

        $episodes = $episodes->latest()->paginate(20);

        return view('admin.episodes.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.episodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EpisodeRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(EpisodeRequest $request)
    {
        $videoUrl = $this->uploadVideos($request->file('videos'));

        if ($videoUrl) {
            $episodes = Episode::create(array_merge($request->all(), ['videos' => $videoUrl]));
        } else {
            $episodes = Episode::create($request->all());
        }

        $this->setCourseTime($episodes);

        return redirect(url('/admin/episodes'));
    }

    /**
     * Display the specified resource.
     *
     * @param Episode $episode
     * @return Response
     */
    public function show(Episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Episode $episode
     * @return Application|Factory|View|Response
     */
    public function edit(Episode $episode)
    {
        return view('admin.episodes.edit', compact('episode'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Episode $episode
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Episode $episode)
    {
        $file = $request->file('videos');

        $inputs = $request->all();
        if ($file) {
            $inputs['videos'] = $this->uploadVideos($request->file('videos'));

        }

        $episode->update($inputs);
        $this->setCourseTime($episode);

        return redirect(route('admin.episodes.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Episode $episode
     * @return Application|RedirectResponse|Response|Redirector
     * @throws Exception
     */
    public function destroy(Episode $episode)
    {
        $episode->delete();
        return redirect(route('admin.episodes.index'));
    }

}
