<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class DashboardPodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.podcasts.index', [
            'podcasts' => Podcast::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
