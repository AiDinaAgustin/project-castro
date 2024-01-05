@extends('layouts.main')

@section('content')
{{-- header --}}
<header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
  <div class="button-nav flex items-center">
    <div class="row">
      
      <div class="col-md-12">
        <div class="input-group relative">
          <div class="relative search-btn w-96 h-8 bg-black rounded-full overflow-hidden px-6">
            <a href="/cari">
              <div class="absolute translate-y-2/4 top-0 left-4">
                <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z"/>
                  <line x1="5" y1="12" x2="19" y2="12" />
                  <line x1="5" y1="12" x2="11" y2="18" />
                  <line x1="5" y1="12" x2="11" y2="6" />
                </svg>
              </div>
            </a>
            <input class="w-full h-full ml-5 text-white bg-transparent outline-none" type="text" name="search" id="search" placeholder="What do you want to listen?" onfocus="toggleContentVisibility(true)" onblur="toggleContentVisibility(false)" value="{{ request('search') }}">
            <button class="absolute top-2 right-2 text-white cursor-pointer" onclick="clearSearch()">
              <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
        <div id="search_list" class="py-2"></div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
</header>

<script>
  function clearSearch() {
    document.getElementById('search').value = '';
  }

  function toggleContentVisibility(isSearchFocused) {
    var mainContent = document.getElementById('main-content');
    mainContent.style.display = isSearchFocused ? 'none' : 'block';
  }
</script>

<main class="w-full min-h-screen overflow-x-hidden" id="main-content">
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