<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
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
        return view('playlists.create', [
            'title' => 'Create New Playlist'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Playlist::create($validateData);

        return redirect('/playlists')->with('success', 'Playlist has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $playlist = Playlist::find($id);

        $podcasts = $playlist->podcasts;

    // Lalu, lewatkan data ke view
    return view('playlists.show', [
        'title' => 'Playlist',
        'playlist' => $playlist,
        'podcasts' => $podcasts,
    ]);
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
        Playlist::destroy($id);

        return redirect('/playlists')->with('success', 'Playlist has been deleted!');
    }

        public function showPodcast($podcastId)
    {
        $podcast = Podcast::find($podcastId);
        $playlists = Playlist::all();

        return view('podcasts.show', compact('podcast', 'playlists'));
    }

        public function addPodcastToPlaylist($podcastId)
    {
        $playlistId = request('playlist_id');

        $playlist = Playlist::find($playlistId);

        $podcast = Podcast::find($podcastId);

        // Menambahkan podcast ke playlist menggunakan attach
        $playlist->podcasts()->attach($podcastId);

        return redirect()->route('playlist.show', ['id' => $playlistId])
                        ->with('success', 'Podcast successfully added to the playlist.');
    }

        public function storePodcastToPlaylist(Request $request)
    {
        // Validasi request jika diperlukan

        $playlistId = $request->input('playlist_id');
        $podcastId = $request->input('podcast_id');

        // Menyimpan podcast ke playlist menggunakan metode attach
        $playlist = Playlist::find($playlistId);
        $playlist->podcasts()->attach($podcastId);

        // Respon atau pengalihan ke halaman yang sesuai
        return redirect()->route('podcast'); // Gantilah 'route_name' dengan nama route yang sesuai
    }

}
