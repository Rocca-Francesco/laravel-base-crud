<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracksList = Track::paginate(10);
        return view('tracks.index', compact('tracksList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all();
        $newTrack = new Track;
        $newTrack->title = $data['title'];
        $newTrack->album = $data['album'];
        $newTrack->author = $data['author'];
        $newTrack->editor = $data['editor'];
        $newTrack->length = $data['length'];
        $newTrack->poster = $data['poster'];
        $newTrack->save();
        return redirect()->route('tracks.show', $newTrack->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $track = Track::find($id);
        return view('tracks.show', compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        return view('tracks.edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Track $track)
    {
        $data = $request->all();
        $track->title = $data['title'];
        $track->album = $data['album'];
        $track->author = $data['author'];
        $track->editor = $data['editor'];
        $track->length = $data['length'];
        $track->poster = $data['poster'];
        $track->update();
        
        return redirect()->route('tracks.show', compact('track'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        $track->delete();
        return redirect()->route('tracks.index');
    }
}
