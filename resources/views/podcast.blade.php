<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">

  <style>
    main::-webkit-scrollbar {
      width: 12px;
    }
  
    main::-webkit-scrollbar-track {
      background: none;
    }
  
    main::-webkit-scrollbar-thumb {
      background-color: rgba(203, 213, 225, 0.5);
      border: none;
    }
    .play-btn {
      position: absolute;
      bottom: 0;
      right: 10px;
      width: 2rem;
      height: 2rem;
      border-radius: 9999px;
      background-color: rgb(250 204 21);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity ease-out 0.2s;
    }
    .cover-music:hover .play-btn {
      opacity: 1;
      bottom: 10px;
    }
    .show {
      display: block !important;
      width: 100%;
      height: 100%;
      background-color: black;
      z-index: 40;
      transition: width 0.4s ease-in;
    }

    .cover {
      /* background-image: url(/assets/img/horor2.jpg); */
      background-repeat: no-repeat;
      background-size: cover;
      width: 100%;
      height: 300px;
      filter: blur(5px);
    }
  </style>  
  <title>Castro Studio</title>
</head>
<body class="bg-black">
  <div class="relative my-5 mx-3">
    <div class="show-btn absolute z-50 w-8 h-8 rounded-full flex justify-center items-center bg-amber-400 left-0 inset-y-0 sm:hidden my-auto">
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
    </div>
    <div class="flex items-start gap-4">
        <nav class="hidden fixed w-full sm:w-36 sm:block sm:static md:w-64 p-4">
            <img class="mb-4" src="/assets/img/logo.png" alt="logo">
            <ul class="flex flex-col gap-4 items-center md:items-start text-lg text-white font-bold">
              <a href="/">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Home.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Dashboard
                  </span>
                </li>
              </a>
              <a href="/cari">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Search.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Search
                  </span>
                </li>
              </a>
              <a href="/live">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Video.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Live
                  </span>
                </li>
              </a>
              <a href="/collection">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Paper.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Koleksi
                  </span>
                </li>
              </a>
              <a href="/profile">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Profile.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Profile
                  </span>
                </li>
              </a>
            </ul>
          </nav>
      <div class="flex-1 bg-zinc-900 rounded-lg mx-auto py-2 px-4">
        <header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
          <div class="button-nav flex">
            <div class="btn-undo mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z"/></svg>
            </div>
            <div class="btn-redo mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/></svg>
            </div>
          </div>
          <div class="Profile flex gap-3">
            <ul class="flex text-gray-400 font-bold gap-3 mr-6">
              <li class="active">Buat Kamu</li>
              <li>Misteri</li>
              <li>Supranatural</li>
              <li>Thriller</li>
            </ul>
          </div>
        </header>
        <main class="relative w-full h-full overflow-x-hidden">
          <!-- Main content -->
          <div class="bg-zinc-900 border-slate-100 dark:bg-slate-800 dark:border-slate-500 border-b rounded-t-xl p-2 pb-2 sm:p-10 sm:pb-8 lg:p-6 xl:p-10 xl:pb-8 space-y-6 sm:space-y-8 lg:space-y-6 xl:space-y-8  items-center">
          <div class="relative">
            @if ($podcast->image)
            <div class="cover" style="background-image: url('{{ asset('storage/' . $podcast->image) }}');"> </div>
            @else
            <div class="cover" style="background-image: url('https://source.unsplash.com/1000x270/?{{ $podcast->category->name }}');"> </div>
            @endif
            

            <div class="flex items-center space-x-4">
              <img src="{{ asset('storage/' . $podcast->image) }}" alt="" width="88" height="70" class="flex-none rounded-lg bg-slate-100" loading="lazy" />
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
              {{-- <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Previous">
                <svg width="24" height="24" fill="none">
                  <path d="m10 12 8-6v12l-8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M6 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button> --}}
              <button type="button" aria-label="Rewind 10 seconds">
                <svg width="24" height="24" fill="none">
                  <path d="M6.492 16.95c2.861 2.733 7.5 2.733 10.362 0 2.861-2.734 2.861-7.166 0-9.9-2.862-2.733-7.501-2.733-10.362 0A7.096 7.096 0 0 0 5.5 8.226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M5 5v3.111c0 .491.398.889.889.889H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            {{-- <button type="button" class="play-pause-btn bg-white text-slate-900 dark:bg-slate-100 dark:text-slate-700 flex-none -my-2 mx-auto w-20 h-20 rounded-full ring-1 ring-slate-900/5 shadow-md flex items-center justify-center" aria-label="Play/Pause">
              <svg width="30" height="32" fill="currentColor">
                <rect x="6" y="4" width="4" height="24" rx="2" />
                <rect x="20" y="4" width="4" height="24" rx="2" />
              </svg>
            </button> --}}
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
              {{-- <button type="button" class="hidden sm:block lg:hidden xl:block" aria-label="Next">
                <svg width="24" height="24" fill="none">
                  <path d="M14 12 6 6v12l8-6Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M18 6v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button> --}}
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
          <div class="flex justify-between items-center flex-wrap text-2xl text-white font-bold my-10 mx-16">
            <div class="flex flex-col items-center">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9794 4.16646H34.0419C41.1044 4.16646 45.8335 9.12479 45.8335 16.4998V33.5227C45.8335 40.8748 41.1044 45.8331 34.0419 45.8331H15.9794C8.91687 45.8331 4.16687 40.8748 4.16687 33.5227V16.4998C4.16687 9.12479 8.91687 4.16646 15.9794 4.16646ZM23.8127 31.229L33.7085 21.3331C34.4169 20.6248 34.4169 19.479 33.7085 18.7498C33.0002 18.0415 31.8335 18.0415 31.1252 18.7498L22.521 27.354L18.8752 23.7081C18.1669 22.9998 17.0002 22.9998 16.2919 23.7081C15.5835 24.4165 15.5835 25.5623 16.2919 26.2915L21.2502 31.229C21.6044 31.5831 22.0627 31.7498 22.521 31.7498C23.0002 31.7498 23.4585 31.5831 23.8127 31.229Z" fill="white"/>
              </svg>
              <p>Selesai</p>
            </div>
            <div class="flex flex-col items-center">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2713 4.16687H34.7088C41.7921 4.16687 45.8338 8.16687 45.8338 15.271V34.7294C45.8338 41.7919 41.813 45.8335 34.7296 45.8335H15.2713C8.16711 45.8335 4.16711 41.7919 4.16711 34.7294V15.271C4.16711 8.16687 8.16711 4.16687 15.2713 4.16687ZM26.7088 26.7294H32.6255C33.5838 26.7085 34.3546 25.9377 34.3546 24.9794C34.3546 24.021 33.5838 23.2502 32.6255 23.2502H26.7088V17.3752C26.7088 16.4169 25.9379 15.646 24.9796 15.646C24.0213 15.646 23.2504 16.4169 23.2504 17.3752V23.2502H17.3546C16.8963 23.2502 16.4588 23.4377 16.1254 23.7502C15.8129 24.0835 15.6254 24.519 15.6254 24.9794C15.6254 25.9377 16.3963 26.7085 17.3546 26.7294H23.2504V32.6252C23.2504 33.5835 24.0213 34.3544 24.9796 34.3544C25.9379 34.3544 26.7088 33.5835 26.7088 32.6252V26.7294Z" fill="white"/>
              </svg>  
              <p>Tambahkan Antrean</p>
            </div>
            <div class="flex flex-col items-center">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.657 5.37913C43.6149 4.30958 42.0726 3.91112 40.6345 4.33055L7.09995 14.0823C5.58266 14.5039 4.50722 15.7139 4.21752 17.2511C3.92157 18.8156 4.95532 20.8016 6.30588 21.6321L16.7914 28.0767C17.8669 28.7373 19.2549 28.5716 20.1449 27.674L32.1519 15.5923C32.7563 14.9631 33.7567 14.9631 34.3611 15.5923C34.9655 16.2005 34.9655 17.1861 34.3611 17.8153L22.3333 29.8991C21.4412 30.7946 21.2745 32.1892 21.931 33.2713L28.3378 43.862C29.0881 45.1203 30.3803 45.8333 31.7976 45.8333C31.9643 45.8333 32.1519 45.8333 32.3186 45.8124C33.9443 45.6026 35.2365 44.4911 35.7158 42.9183L45.6574 9.42665C46.0951 8.00058 45.6991 6.44868 44.657 5.37913Z" fill="white"/>
              </svg>                
              <p>Bagikan</p>
            </div>
            <div class="flex flex-col items-center">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.3961 15.1886V6.83647C23.3961 5.9484 24.1044 5.20833 25.0002 5.20833C25.8023 5.20833 26.4819 5.83019 26.5895 6.61788L26.6044 6.83647V15.1886L36.5625 15.1892C41.5209 15.1892 45.5945 19.2495 45.8232 24.3134L45.8334 24.7627V35.2612C45.8334 40.3605 41.9014 44.5462 37.0167 44.7813L36.5834 44.7917H13.4167C8.45835 44.7917 4.40437 40.7516 4.17677 35.6693L4.16669 35.2182L4.16669 24.7412C4.16669 19.6419 8.079 15.4359 12.9625 15.1997L13.3959 15.1892H23.3959V28.5275L20.0625 25.0854C19.4375 24.44 18.4167 24.44 17.7917 25.0854C17.4792 25.4081 17.3334 25.8384 17.3334 26.2686C17.3334 26.5956 17.4267 26.9364 17.624 27.2249L17.7917 27.4303L23.8542 33.7123C24.1459 34.035 24.5625 34.2071 25 34.2071C25.3472 34.2071 25.6945 34.0876 25.9693 33.861L26.125 33.7123L32.1875 27.4303C32.8125 26.7849 32.8125 25.7308 32.1875 25.0854C31.6193 24.4987 30.724 24.4453 30.0964 24.9254L29.9167 25.0854L26.6042 28.5275V15.1892L23.3961 15.1886Z" fill="white"/>
              </svg>                
              <p>Unduh</p>
            </div>
          </div>
          <!-- details -->
          <div class="text-gray-400 font-bold mb-10 ">
            <p class="text-lg">{{ $podcast->created_at->format('D M Y') }}</p>
            <div class="text-md mb-4 text-white">
              {!! $podcast->body !!}
            </div>
            
            <div class="genre">
              <ul class="flex justify-start items-center gap-3">
                <li class="bg-zinc-700 py-2 px-4 rounded-full">{{ $podcast->category->name }}</li>
                <li class="bg-zinc-700 py-2 px-4 rounded-full">PG-13</li>
              </ul>
            </div>
          </div>
          <!-- Player Music  -->
          <div class="player w-full h-16 flex items-center justify-between px-4 absolute bg-zinc-700 bottom-5">
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
          </div>
        </main>
      </div>
    </div>
  </div>
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- swiper card -->
<script>
  const swiper = new Swiper('.swiper', {
    // Default parameter
    slidesPerView: 1,
    breakpoints: {
      // when window width is >= 320px
      450: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      720: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      900: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 40
      },
      1500: {
        slidesPerView: 7,
        spaceBetween: 40
      }
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script>
  // button share 
  const btnShare = document.querySelector('.btn-share')
  btnShare.addEventListener('click', () => {
    const currentURL = window.location.href;
    const dummy = document.createElement('textarea');
    dummy.value = currentURL;
    document.body.appendChild(dummy);
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);

    // Tampilkan alert
    alert('URL berhasil disalin!');
  })
</script>
<script>
  // show modal menu 
  const showButton = document.querySelector('.show-btn');
  const modalMenu = document.querySelector('nav');
  showButton.addEventListener(('click'), ()=> {
    modalMenu.classList.toggle('show');
  })
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Get elements
    const audio = new Audio();  // Create an audio element
    const playPauseButton = document.querySelector('.play-pause-btn');
    const progressBar = document.querySelector('.progress-bar');
    const currentTimeDisplay = document.querySelector('.current-time');
    const durationDisplay = document.querySelector('.duration');
    const rewindButton = document.querySelector('button[aria-label="Rewind 10 seconds"]');
    const skipButton = document.querySelector('button[aria-label="Skip 10 seconds"]');
    const speedDisplay = document.getElementById('speedDisplay');
    const speedDropdown = document.getElementById('speedDropdown');

     // Set the audio source
     audio.src = '{{ asset('storage/' . $podcast->audio)  }}';

    // Sembunyikan dropdown saat tombol diklik
    document.querySelector('.w-10 button').addEventListener('click', () => {
      speedDropdown.classList.toggle('hidden');
    });

    // Tanggapi perubahan speed saat opsi dipilih
    speedDropdown.addEventListener('click', function(event) {
      const selectedSpeed = event.target.textContent;
      speedDisplay.textContent = selectedSpeed;
      console.log(`Selected speed: ${selectedSpeed}`);
      speedDropdown.classList.add('hidden');

      // Setel kecepatan pemutaran audio
      audio.playbackRate = parseFloat(selectedSpeed);
    });

    // Sembunyikan dropdown jika di klik di luar area dropdown
    document.addEventListener('click', function(event) {
      const isClickInside = document.querySelector('.w-40').contains(event.target);
      if (!isClickInside) {
        speedDropdown.classList.add('hidden');
      }
    });

    // Tanggapi perubahan speed saat opsi dipilih
speedDropdown.addEventListener('click', function(event) {
  const selectedSpeed = event.target.textContent;
  speedDisplay.textContent = selectedSpeed;
  console.log(`Selected speed: ${selectedSpeed}`);
  speedDropdown.classList.add('hidden');

  // Setel kecepatan pemutaran audio
  audio.playbackRate = parseFloat(selectedSpeed);
});
   

    // // Inisialisasi Choices.js untuk dropdown speed
    // const speedChoices = new Choices(speedSelect, {
    //   choices: [
    //     { value: '0.5', label: '0.5x' },
    //     { value: '1', label: '1x' },
    //     { value: '1.5', label: '1.5x' },
    //     { value: '2', label: '2x' }
    //   ],
    //   shouldSort: false
    // });

    // // Event listener untuk perubahan speed pada dropdown
    // speedSelect.addEventListener('change', function() {
    //   const selectedSpeed = speedSelect.value;
    //   audio.playbackRate = parseFloat(selectedSpeed);
    // });

    rewindButton.addEventListener('click', function() {
      // Mengurangkan waktu sebanyak 10 detik dari waktu saat ini
      audio.currentTime -= 10;
    });

    skipButton.addEventListener('click', function() {
      // Menambahkan waktu sebanyak 10 detik dari waktu saat ini
      audio.currentTime += 10;
    });

    // Play/Pause button click event
    playPauseButton.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
        // Tampilkan ikon pause dan sembunyikan ikon play
        document.querySelector('.play-icon').style.display = 'none';
        document.querySelector('.pause-icon').style.display = 'block';
      } else {
        audio.pause();
        // Tampilkan ikon play dan sembunyikan ikon pause
        document.querySelector('.play-icon').style.display = 'block';
        document.querySelector('.pause-icon').style.display = 'none';
      }
    });

    // Update progress bar and time displays
    audio.addEventListener('timeupdate', function() {
      const progress = (audio.currentTime / audio.duration) * 100;
      progressBar.style.width = `${progress}%`;

      // Update current time display
      const currentTime = formatTime(audio.currentTime);
      currentTimeDisplay.textContent = currentTime;

      // Update duration display
      const duration = formatTime(audio.duration);
      durationDisplay.textContent = duration;
    });

    // Seek functionality
    progressBar.parentElement.addEventListener('click', function(e) {
      const clickedPosition = e.clientX - this.getBoundingClientRect().left;
      const clickedPercentage = (clickedPosition / this.clientWidth) * 100;
      const newTime = (clickedPercentage / 100) * audio.duration;

      audio.currentTime = newTime;
    });

    // Format time as MM:SS
    function formatTime(timeInSeconds) {
      const minutes = Math.floor(timeInSeconds / 60);
      const seconds = Math.floor(timeInSeconds % 60);
      return `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }
  });
</script>

<script>
  const playbtns = document.querySelectorAll('.play_btn')
  const pausebtns = document.querySelectorAll('.pause_btn')
  pausebtns.forEach((pausebtn) => {
    pausebtn.style.display = 'none'
  })

  playbtns.forEach((playbtn) => {
    playbtn.addEventListener('click', () => {
      pausebtns.forEach((pausebtn) => {
        pausebtn.style.display = 'block'
      })
      playbtns.forEach((playbtn) => {
        playbtn.style.display = 'none'
      })
    })
  })

  pausebtns.forEach((pausebtn, index) => {
    pausebtn.addEventListener('click', () => {
      playbtns.forEach((playbtn) => {
        playbtn.style.display = 'block'
      })
      pausebtns.forEach((pausebtn) => {
        pausebtn.style.display = 'none'
      })
    })
  })
</script>

</html>