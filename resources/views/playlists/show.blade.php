@extends('layouts.main')

@section('content')
    <main class="w-full min-h-screen overflow-x-hidden">
        <div class="mb-4">
          {{-- @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 text-white" role="alert">
          {{ session('success') }}
            </div>
            @endif --}}
            <h3 class="text-2xl text-white font-bold mb-3">Playlists</h3>
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                {{-- @foreach ($playlists as $playlist) --}}
                  <div class="swiper-slide">
                    <a href="">
                      <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                        <div class="relative w-36">
                          <img class="w-full" src="assets/img/page2.jpg" alt="your music">
                          {{-- <div class="play-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                          </div> --}}
                        </div>
                        <div>
                          <h4 class="truncate text-white text-base mb-2">dina</h4>
                          <p class="truncate text-slate-400 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                {{-- @endforeach --}}
               

              </div>
              <div class="swiper-slide mt-6">
                <h3 class="text-xl text-white font-bold mb-3">Tambah Playlist</h3>
                <a href="/playlists/create">
                  <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                    <div class="relative w-36">
                        <svg class="h-34 w-34 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>                         
                      
                    </div>
                    <div>
                      <h4 class="truncate text-white text-base mb-2 mt-4 text-center">Playlist Baru</h4>
                    </div>
                  </div>
                </a>
              </div>
              <!-- If we need navigation buttons -->
              {{-- <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div> --}}
            </div>
          </div>
    </main>
@endsection