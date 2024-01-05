@extends('layouts.cari')

@section('content')

<div class="mb-4">
    <h3 class="text-2xl text-white font-bold mb-3">Jelajah</h3>
    <div class="flex flex-wrap gap-4 text-xl text-white font-bold">

      <div class="relative overflow-hidden bg-blue-600 w-40 h-40 rounded-lg p-2">
        <p class="text-white">Podcast</p>
        <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page2.jpg" alt="your podcast" width="80px">
      </div>
  
      <div class="relative overflow-hidden bg-green-600 w-40 h-40 rounded-lg p-2">
        <p class="text-white">Live</p>
        <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page3.jpg" alt="your audiobook" width="80px">
      </div>

    </div>
  </div>

  <div class="mb-4">
    <h3 class="text-2xl text-white font-bold mb-3">Jelajah Genre Lain</h3>
    <div class="flex flex-wrap gap-4 text-xl text-white font-bold">

        @foreach ($categories as $category)
        <a href="/categories/{{ $category->slug }}">
        <div class="relative overflow-hidden bg-pink-600 w-40 h-40 rounded-lg p-2">
            <p class="text-white">{{ $category->name }}</p>
            <img class="absolute -rotate-45 -bottom-5 right-0" src="assets/img/page1.jpg" alt="your music" width="80px">
          </div>
        </a> 
        @endforeach

    </div>
  </div>
@endsection