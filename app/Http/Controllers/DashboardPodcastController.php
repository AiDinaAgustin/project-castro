<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.podcasts.index', [
            'title' => 'My Podcasts',
            'podcasts' => Podcast::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.podcasts.create', [
            'title' => 'Create New Podcast',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|unique:podcasts',
            'category_id' => 'required',
            'image' => 'image|file|max:1999', //max:1999 = 1,99mb
            'audio' => 'file|mimes:mp3,wav,ogg,flac,weba',
            'body' => 'required'
        ]);

        //jika user mengupload gambar
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('podcast-images');
        }

        //jika user mengupload audio
        if($request->file('audio')){
            $validatedData['audio'] = $request->file('audio')->store('podcast-audios');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Podcast::create($validatedData);

        return redirect('/dashboard/podcasts')->with('success', 'New podcast has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        return view('dashboard.podcasts.show', [
            'title' => "Detail Podcast : $podcast->title",
            'podcast' => $podcast
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        return view('dashboard.podcasts.edit', [
            'title' => "Edit Podcast : $podcast->title",
            'podcast' => $podcast,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
    {
        $rules = [
            'title' => 'required|min:3|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1999',
            'audio' => 'file|mimes:mp3,wav,ogg,flac,weba',
            'body' => 'required'
        ];

        //validasi slug jika slug tidak sama dengan slug yang ada di database maka akan membuat slug baru dengan menggunakan title
        //jika slug sama dengan slug yang ada di database maka slug tidak akan berubah
        if ($request->slug != $podcast->slug) {
            $rules['slug'] = 'required|unique:podcasts';
        }

        //validasi data yang di inputkan user
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            //jika user mengupload gambar maka gambar yang lama akan dihapus
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('podcast-images');
        }

        if($request->file('audio')){
            //jika user mengupload audio maka audio yang lama akan dihapus
            if($request->oldAudio){
                Storage::delete($request->oldAudio);
            }
            $validatedData['audio'] = $request->file('audio')->store('podcast-audios');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Podcast::where('id', $podcast->id)
            ->update($validatedData);

        return redirect('/dashboard/podcasts')->with('success', 'Podcast has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        if($podcast->image){
            Storage::delete($podcast->image);
        }

        if($podcast->audio){
            Storage::delete($podcast->audio);
        }
        Podcast::destroy($podcast->id);

        return redirect('/dashboard/podcasts')->with('success', 'Podcast has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Podcast::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    
}
