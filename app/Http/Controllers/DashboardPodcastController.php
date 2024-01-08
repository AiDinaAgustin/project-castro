<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
            'body' => 'required'
        ]);

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
            'body' => 'required'
        ];

        //validasi slug jika slug tidak sama dengan slug yang ada di database maka akan membuat slug baru dengan menggunakan title
        //jika slug sama dengan slug yang ada di database maka slug tidak akan berubah
        if ($request->slug != $podcast->slug) {
            $rules['slug'] = 'required|unique:podcasts';
        }

        //validasi data yang di inputkan user
        $validatedData = $request->validate($rules);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        Podcast::destroy($podcast->id);

        return redirect('/dashboard/podcasts')->with('success', 'Podcast has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Podcast::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    
}
