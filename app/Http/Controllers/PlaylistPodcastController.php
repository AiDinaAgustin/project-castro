<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\PlaylistPodcast;
use Illuminate\Validation\Rule;

class PlaylistPodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('playlists.index', [
            'title' => 'Playlists',
            'playlists' => Playlist::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'playlist_id' => 'required',
            'podcast_id' => 'required'
        ]);

        
        PlaylistPodcast::create($validatedData);
        //redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Podcast has been added to playlist!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
