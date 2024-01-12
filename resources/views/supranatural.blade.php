@extends('layouts.main')

@section('content')
<main class="w-full min-h-screen overflow-x-hidden">
  <h2 class="text-4xl text-white font-bold mb-10">Cerita & Podcast Supernatural Khusus Buatmu</h2>
    <!-- Acaramu -->
    <div class="mb-4">
        <h3 class="text-2xl text-white font-bold mb-3">Supernatural Tranding</h3>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            @forelse ($podcasts as $podcast)
                <div class="swiper-slide">
                    <a href="/podcasts/{{ $podcast->slug }}">
                        <div class="cover-music bg-zinc-800 w-40 h-56 rounded-md p-2">
                            <div class="relative w-36">
                                @if ($podcast->image)
                                    <img class="w-full h-36 object-cover object-center" src="{{ asset('storage/' . $podcast->image) }}" alt="your music">
                                @else
                                    <img class="w-full" src="https://source.unsplash.com/400x400/?{{ $podcast->category->name }}" alt="your music">
                                @endif
                                <div class="play-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="truncate text-white text-base mb-2">{{ $podcast->title}}</h4>
                                <div class="truncate text-slate-400 text-xs">{!! $podcast->body !!}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="swiper-slide">
                  <div class="swiper-slide flex items-center justify-center mt-2">
                    <p class="text-white text-center font-semibold text-xl bg-red-500 p-4 rounded-lg">Maaf, podcast tidak tersedia saat ini.</p>
                </div>                  
                </div>
            @endforelse
        </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
    </div>
</main>
@endsection