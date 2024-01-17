@extends('layouts.main')

@section('content')
    <main class="w-full min-h-screen overflow-x-hidden">
        <div class="mb-4">
          @if (session()->has('success'))
            <div class="alert alert-success bg-yellow-300 px-2 rounded-lg col-lg-12 text-white" role="alert">
          {{ session('success') }}
            </div>
            @endif
            <h3 class="text-2xl text-white font-bold mb-3">Add Playlists</h3>
            <!-- Button trigger modal -->
           <!-- component -->
            <!-- component -->
          <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

          <!-- This is modal create playlist -->
          <div class="max-w-2xl mb-4">
          
              <!-- Modal toggle -->
              <button class="block text-white bg-zinc-800 hover:bg-zinc-900 focus:ring-2 focus:ring-zinc-900 font-medium rounded-lg text-sm px-4 py-4" type="button" data-modal-toggle="authentication-modal">
                <svg class="h-34 w-34 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>                         

                Tambah Playlist
              </button>

              <!-- Main modal -->
              <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                  <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                      <!-- Modal content -->
                      <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                          <div class="flex justify-end p-2">
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                              </button>
                          </div>
                          <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="/playlists" method="post">
                            @csrf
                              <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Playlist</h3>
                              <div>
                                  <label for="name" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name</label>
                                  <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name') is-invalid @enderror" placeholder="playlist name" required="">
                                  @error('name')
                                    {{ $message }}
                                  @enderror
                              </div>
                              <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                          </form>
                      </div>
                  </div>
              </div> 
          </div>
          <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
            
            <!-- Slider main container -->
            <div class="swiper">
              <h3 class="text-2xl text-white font-bold mb-3">Playlists</h3>
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($playlists as $playlist)
                  <div class="swiper-slide">
                    <a href="/playlists/{{ $playlist->id }}">
                      <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                        <div class="relative w-36">
                          <img class="w-full" src="assets/img/page2.jpg" alt="your music">
                          {{-- <div class="play-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                          </div> --}}
                        </div>
                        <div>
                          <h4 class="truncate text-white text-base mb-2">{{ $playlist->name }}</h4>
                          <p class="truncate text-slate-400 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                @endforeach
               

              </div>
              
            </div>
          </div>
    </main>
    <!-- Modal -->
@endsection
<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>