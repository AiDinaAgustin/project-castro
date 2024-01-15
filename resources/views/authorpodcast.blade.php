<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  {{-- link favicon --}}
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
    {{-- link fontawesome --}}
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

    .active {
      color: white;
      border-bottom: 2px solid #F9D80F;
    }
  </style>
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
  </style>
  <title>Castro Studio</title>
</head>

<body class="bg-black">
  <div class="relative my-5 mx-3">
    <div
      class="show-btn absolute z-50 w-8 h-8 rounded-full flex justify-center items-center bg-amber-400 left-0 inset-y-0 sm:hidden my-auto">
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
        <path
          d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
      </svg>
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
      <div class="overflow-hidden flex-1 bg-zinc-900 rounded-lg mx-auto p-4">
        <header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
          <div class="button-nav flex">
            <div class="btn-undo mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F">
                <path
                  d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
              </svg>
            </div>
            <div class="btn-redo mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F">
                <path
                  d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z" />
              </svg>
            </div>
          </div>
        </header>
        <main class="w-full flex flex-col items-center gap-3 min-h-screen overflow-x-hidden"
          style="width: 103%; margin: -1.5%; ">
          <!-- Main content -->
          <div class="row"
            style="width: 105%; padding: -10%; padding-bottom: 10px; background: linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0.579)), url('/assets/img/Ellipse 46.png'); background-size: cover; background-position: center; width: 100%;">
            @if (session()->has('success'))
                  <div class="alert alert-success col-lg-12 text-white" role="alert">
                      {{ session('success') }}
                  </div>
              @endif
            <div class="col-lg-7 col-12 d-flex align-items-center">
              <div>
                
                <h3 class="text-2xl text-white font-bold" style="font-size: 36px;">{{ $author->name }}</h3>
                <h3 class="text-2xl font-bold" style="font-size: 16px; color: grey;">&commat;{{ $author->username }}</h3>
                    <div class="row">
                      <div class="col-lg-3 col-12">
                        <p class="text-xl text-white text-center">22316</p>
                        <p class="text-xl text-center" style="color: gray; font-size: 16px;">Followers</p>
                      </div>
                      <div class="col-lg-3 col-12">
                        <p class="text-xl text-white text-center">0</p>
                        <p class="text-xl text-center" style="color: gray; font-size: 16px;">Following</p>
                      </div>
                      <div class="col-lg-3 col-12">
                        <p class="text-xl text-white text-center" style="text-align: center;">0</p>
                        <p class="text-xl text-start" style="color: gray; font-size: 16px;">Menonton</p>
                      </div>
                    </div>
              </div>
              @if (Auth::id() !== $author->id)
              <div class="pb-12 d-flex justify-content-lg-end align-items-center">
                <form action="{{ route('author.follow', $author->username) }}" method="post">
                  @csrf
                <button class="flex btn btn-warning text-white font-bold ml-3 mb-3 px-4" id="followBtn">FOLLOW</button>
              </form>
              </div>
              @endif

            </div>
            <div class="col-lg-5 col-12 d-flex justify-content-lg-end align-items-center">
              <img class="mt-5" src="/assets/img/Ellipse 46.png" alt="" width="250px">
              
            </div>
           
          
            <div class="col-lg-12 flex gap-3">
                <p class="active text-gray-400 font-bold gap-3 mr-6 mb-2">Karya</p>
            </div>
            
        </div>
        <div class="col-lg-12">
            <div class="mb-4">
                <!-- Slider main container -->
                <div class="swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                        @foreach ($podcasts as $podcast)
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
                        @endforeach
                    
                    </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        </main>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const mySwiper = new Swiper('.mySwiper', {
    // Default parameter
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 320px
      720: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    },
    loop: true,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    }
  });
</script>
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
  // show modal menu 
  const showButton = document.querySelector('.show-btn');
  const modalMenu = document.querySelector('nav');
  showButton.addEventListener(('click'), () => {
    modalMenu.classList.toggle('show');
  })
</script>

</html>