@extends('dashboard.layouts.main')

@section('content')

<div class="mb-4 w-50 ml-10 col-lg-8 ">
    <form class="mx-auto" action="/dashboard/podcasts" method="post">
        @csrf
        <div class="form-group flex flex-col gap-2 mb-3">
            <label class="h-full text-lg text-white" for="title">Title</label>
            <input class="rounded-md outline-yellow-700 p-2" type="text" id="title" name="title">
        </div>
         <div class="form-group flex flex-col gap-2 mb-3">
            <label class="h-full text-lg text-white" for="slug">Slug</label>
            <input class="rounded-md outline-yellow-700 p-2" type="text" id="slug" name="slug">
        </div>
        
        <div class="w-full flex justify-end">
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white" type="submit">Create Podcast</button>
        </div>
    </form>
</div>

@endsection