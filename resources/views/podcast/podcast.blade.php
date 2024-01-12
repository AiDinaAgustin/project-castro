<main class="relative w-full h-full overflow-x-hidden">
 
    <!-- Main content -->
    <div class="bg-zinc-900 border-slate-100 dark:bg-slate-800 dark:border-slate-500 border-b rounded-t-xl p-2 pb-2 sm:p-10 sm:pb-8 lg:p-6 xl:p-10 xl:pb-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8  items-center">
      @if (session()->has('success'))
      <div class="alert alert-success col-lg-12 text-white" role="alert">
          {{ session('success') }}
      </div>
  @endif
      <div class="relative">
      @if ($podcast->image)
      <div class="cover" style="background-image: url('{{ asset('storage/' . $podcast->image) }}');"> </div>
      @else
      <div class="cover" style="background-image: url('https://source.unsplash.com/1000x270/?{{ $podcast->category->name }}');"> </div>
      @endif
      <div class="flex items-center space-x-4">
      @if ($podcast->image)
      <img src="{{ asset('storage/' . $podcast->image) }}" alt="" width="88" height="70" class="flex-none rounded-lg bg-slate-100" loading="lazy" />
      @else
      <img src="https://source.unsplash.com/100x100/?{{ $podcast->category->name }}" class="flex-none rounded-lg bg-slate-100" loading="lazy" />
      @endif
        <div class="min-w-0 flex-auto space-y-1 font-semibold">
          <p class="text-yellow-500 text-sm leading-6">
            <abbr title="Track"></abbr> {{ $podcast->category->name  }}
          </p>
          <h2 class="text-slate-500 text-sm leading-6 truncate">
            {{ $podcast->author->name  }}
          </h2>
          <p class="text-white dark:text-slate-50 text-lg">
            {{ $podcast->title }}
          </p>
        </div>
      </div>
      <div class="space-y-2 mt-4">
        <div class="relative">
          <div class="progress-bar-container border border-gray-300">
            <div class="progress-bar bg-white h-1 border border-gray-300"></div>
          </div>
        </div>
        <div class="time-displays flex justify-between text-sm leading-6 font-medium tabular-nums">
          <div class="current-time text-cyan-500 dark:text-slate-100">00:00</div>
          <div class="duration text-slate-500 dark:text-slate-400">00:00</div>
        </div>
      </div>
    </div>
    </div>
    <div class="bg-slate-50 text-slate-500 dark:bg-slate-600 dark:text-slate-200 rounded-b-xl flex items-center">
      <div class="flex-auto flex items-center justify-evenly">
        <button type="button" aria-label="Add to favorites">
          <svg width="24" height="24">
            <path d="M7 6.931C7 5.865 7.853 5 8.905 5h6.19C16.147 5 17 5.865 17 6.931V19l-5-4-5 4V6.931Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <button type="button" aria-label="Rewind 10 seconds">
          <svg width="24" height="24" fill="none">
            <path d="M6.492 16.95c2.861 2.733 7.5 2.733 10.362 0 2.861-2.734 2.861-7.166 0-9.9-2.862-2.733-7.501-2.733-10.362 0A7.096 7.096 0 0 0 5.5 8.226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M5 5v3.111c0 .491.398.889.889.889H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <button type="button" class="play-pause-btn bg-white text-slate-900 dark:bg-slate-100 dark:text-slate-700 flex-none -my-2 mx-auto w-20 h-20 rounded-full ring-1 ring-slate-900/5 shadow-md flex items-center justify-center" aria-label="Play/Pause">
        <!-- Ganti konten SVG untuk tombol play -->
        <svg class="play-icon" width="30" height="32" fill="currentColor">
          <!-- Ganti dengan ikon play yang diinginkan -->
          <!-- Misalnya, dua segitiga -->
          <path d="M6 4l20 12-20 12Z" />
          <path d="M6 4v24" />
          <path d="M26 4v24" />
          
        </svg>
        <!-- Ganti konten SVG untuk tombol pause -->
        <svg class="pause-icon" width="30" height="32" fill="currentColor" style="display:none;">
          <!-- Ganti dengan ikon pause yang diinginkan -->
          <!-- Misalnya, sebuah garis mendatar -->
          <rect x="6" y="4" width="4" height="24" rx="2" />
          <rect x="20" y="4" width="4" height="24" rx="2" />
        </svg>
      </button>
      <div class="flex-auto flex items-center justify-evenly">
        <button type="button" aria-label="Skip 10 seconds">
          <svg width="24" height="24" fill="none">
            <path d="M17.509 16.95c-2.862 2.733-7.501 2.733-10.363 0-2.861-2.734-2.861-7.166 0-9.9 2.862-2.733 7.501-2.733 10.363 0 .38.365.711.759.991 1.176" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M19 5v3.111c0 .491-.398.889-.889.889H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div class="relative inline-block">
          <div class="w-10 relative">
            <button type="button" class="w-full rounded-lg text-xs leading-6 font-semibold px-2 ring-2 ring-inset ring-slate-500 text-slate-500 dark:text-slate-100 dark:ring-0 dark:bg-slate-500">
              <span id="speedDisplay">1x</span>
              <div id="speedDropdown" class="absolute hidden mt-2 bg-white ring-1 ring-slate-300 dark:bg-slate-700 dark:ring-slate-500 text-slate-500 dark:text-slate-100">
                <div class="px-2 py-1" onclick="selectSpeed('0.5')">0.5x</div>
                <div class="px-2 py-1" onclick="selectSpeed('1')">1x</div>
                <div class="px-2 py-1" onclick="selectSpeed('1.5')">1.5x</div>
                <div class="px-2 py-1" onclick="selectSpeed('2')">2x</div>
              </div>
            </button>
          </div>
        </div>

    </div>
    </div>
    <!-- icon -->
    @include('podcast.icon')
    <!-- details -->
    @include('podcast.details')
    <!-- Player Music  -->
    {{-- <div class="player w-full h-16 flex items-center justify-between px-4 absolute bg-zinc-700 bottom-5">
      <div class="flex gap-x-2">
        @if ($podcast->image)
        <img class="w-[65px]" src="{{ asset('storage/' . $podcast->image) }}" alt="" style="width: 65px; height: 50px; object-fit: cover;">
        @else
        <img class="w-[65px]" src="https://source.unsplash.com/500x270/?{{ $podcast->category->name }}" alt="">
        @endif
        <div class="flex flex-col items-start text-white">
          <!-- title -->
          <a href="/authors/{{ $podcast->author->username }}"><p>{{ $podcast->author->name }}</p></a>
          <!-- durations -->
          <div class="truncate text-slate-400 text-xs mt-2"><a href="/categories/{{ $podcast->category->slug }}">{{ $podcast->category->name }}</a></div>
        </div>
      </div>
      <svg class="play_btn" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.166626 21.0121C0.166626 9.51303 9.5175 0.166672 21 0.166672C32.4824 0.166672 41.8333 9.51303 41.8333 21.0121C41.8333 32.487 32.4824 41.8333 21 41.8333C9.5175 41.8333 0.166626 32.487 0.166626 21.0121ZM28.6415 23.1205C28.8627 22.8994 29.1443 22.5577 29.2046 22.4773C29.5263 22.0552 29.6872 21.5326 29.6872 21.0121C29.6872 20.4272 29.5062 19.8845 29.1644 19.4423C29.1364 19.4143 29.0815 19.3546 29.01 19.2767C28.8762 19.1312 28.6842 18.9222 28.5008 18.7388C26.8518 16.97 22.5484 14.0757 20.2961 13.1913C19.9543 13.0526 19.0896 12.7491 18.6271 12.729C18.1846 12.729 17.7623 12.8295 17.3602 13.0305C16.8574 13.3119 16.4552 13.7541 16.234 14.2767C16.0933 14.6385 15.8721 15.7238 15.8721 15.7439C15.6509 16.9298 15.5302 18.8594 15.5302 20.99C15.5302 23.022 15.6509 24.8692 15.8318 26.0752C15.8368 26.0802 15.8541 26.1664 15.881 26.3004C15.9627 26.7078 16.1329 27.5564 16.3145 27.9042C16.7569 28.7484 17.6216 29.271 18.5466 29.271H18.6271C19.2303 29.2509 20.4972 28.7283 20.4972 28.7082C22.6288 27.8239 26.8317 25.0702 28.5209 23.2411L28.6415 23.1205Z" fill="white"/>
      </svg>
      <svg class="pause_btn" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="8.33337" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
        <rect x="29.1666" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
      </svg>
    </div> --}}
    <!-- komentar -->
    
    @include('podcast.komentar')
    

  </div>
  </main>