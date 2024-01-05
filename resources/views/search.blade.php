@extends('layouts.main')

@section('content')
{{-- header --}}
<header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
  <div class="button-nav flex items-center">
    {{-- <div class="btn-undo mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z"/></svg>
      </div> --}}
    {{-- <div class="btn-redo mr-4">
      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/></svg>
    </div> --}}
      {{-- <form action="/">
        <div class="relative search-btn w-72 h-8 bg-black rounded-full overflow-hidden px-4">
          <div class="absolute translate-y-2/4 top-0 left-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="white"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
          </div>
            <input class="w-full h-full ml-5 text-white bg-transparent outline-none" type="text" placeholder="What do you want to listen?" name="search">
        </div>
    </form> --}}
    <div class="row">
      
      <div class="col-lg-3"></div>
          <div class="col-md-12">
              <form action="/podcasts">
                <div class="input-group">
                  <div class="relative search-btn w-72 h-8 bg-black rounded-full overflow-hidden px-6">
                    <a href="/cari">
                      <div class="absolute translate-y-2/4 top-0 left-4">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="5" y1="12" x2="11" y2="18" />  <line x1="5" y1="12" x2="11" y2="6" /></svg>                      </div>
                    </a>
                      <input class="w-full h-full ml-5 text-white bg-transparent outline-none" type="text" name="search" placeholder="What do you want to listen?">
                  </div>
                  {{-- <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''"> --}}
                </div>
              </form>
              <div id="search_list"></div>
          </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
</header>
<main class="w-full min-h-screen overflow-x-hidden">
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
</main>
@endsection