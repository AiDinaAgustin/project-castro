<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
      height: 500px;
      filter: blur(10px);
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
              <a href="/dashboard">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Home.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Dashboard
                  </span>
                </li>
              </a>
              <a href="/dashboard/podcasts">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Paper.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Podcast
                  </span>
                </li>
              </a>
              {{-- <a href="#">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Profile.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    User
                  </span>
                </li>
              </a> --}}
              <a href="#">
                <li class="flex items-center gap-3">
                  <img src="/assets/img/Video.png" alt="" width="35px">
                  <span class="hidden md:block text-2xl">
                    Live
                  </span>
                </li>
              </a>
            </ul>
          </nav>
      <div class="flex-1 bg-zinc-900 rounded-lg mx-auto py-2 px-4">
        <header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2 px-4">
          {{-- <div class="brand w-full sm:w-36 md:w-64 flex justify-center">
           <img src="/assets/img/LOGO CASTRO (2) 2.png" alt="">
          </div> --}}
          <div class="Profile w-full flex items-center justify-between">
            <h1 class="text-2xl text-white font-bold ml-4">{{ $title }}</h1>
            <button class="bg-yellow-500 rounded-lg text-lg text-white font-bold px-2"><a href="/">Back</a></button>
          </div>
        </header>
        <main class="relative w-full h-full overflow-x-hidden">
          <!-- Main content -->
          <div class="relative">
            @if ($podcast->image)
            <div class="cover" style="background-image: url('{{ asset('storage/' . $podcast->image) }}');"> </div>
            @else
            <div class="cover" style="background-image: url('https://source.unsplash.com/1000x270/?{{ $podcast->category->name }}');"> </div>
            @endif
            <div class="absolute w-max bottom-10 start-1/2 -translate-x-1/2 flex flex-col justify-center items-center gap-5 text-2xl text-white font-bold">
              @if ($podcast->image)
              <img class="w-64 mb-4" src="{{ asset('storage/' . $podcast->image) }}" alt="{{ $podcast->category->name }}" style="width: 250px; height: 140px; object-fit: cover;">
              @else
              <img class="w-64 mb-4" src="https://source.unsplash.com/500x270/?{{ $podcast->category->name }}" alt="{{ $podcast->category->name }}">
              @endif
              <svg class="play_btn" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.166626 21.0121C0.166626 9.51303 9.5175 0.166672 21 0.166672C32.4824 0.166672 41.8333 9.51303 41.8333 21.0121C41.8333 32.487 32.4824 41.8333 21 41.8333C9.5175 41.8333 0.166626 32.487 0.166626 21.0121ZM28.6415 23.1205C28.8627 22.8994 29.1443 22.5577 29.2046 22.4773C29.5263 22.0552 29.6872 21.5326 29.6872 21.0121C29.6872 20.4272 29.5062 19.8845 29.1644 19.4423C29.1364 19.4143 29.0815 19.3546 29.01 19.2767C28.8762 19.1312 28.6842 18.9222 28.5008 18.7388C26.8518 16.97 22.5484 14.0757 20.2961 13.1913C19.9543 13.0526 19.0896 12.7491 18.6271 12.729C18.1846 12.729 17.7623 12.8295 17.3602 13.0305C16.8574 13.3119 16.4552 13.7541 16.234 14.2767C16.0933 14.6385 15.8721 15.7238 15.8721 15.7439C15.6509 16.9298 15.5302 18.8594 15.5302 20.99C15.5302 23.022 15.6509 24.8692 15.8318 26.0752C15.8368 26.0802 15.8541 26.1664 15.881 26.3004C15.9627 26.7078 16.1329 27.5564 16.3145 27.9042C16.7569 28.7484 17.6216 29.271 18.5466 29.271H18.6271C19.2303 29.2509 20.4972 28.7283 20.4972 28.7082C22.6288 27.8239 26.8317 25.0702 28.5209 23.2411L28.6415 23.1205Z" fill="white"/>
              </svg>
              <svg class="pause_btn" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="8.33337" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
                <rect x="29.1666" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
              </svg>
              <!-- title -->
              <p>{{ $podcast->title }}</p>
              <!-- durations -->
              <p>{{ $podcast->created_at->diffForHumans() }}</p>
            </div>
          </div>
          
          <!-- details -->
          <div class="text-gray-400 font-bold mb-10 mt-6">
            <p class="text-lg mb-4">{{ $podcast->created_at->format('D M Y') }}</p>
            <div class="text-xl text-white mb-6">
              {!! $podcast->body !!}
            </div>
            
            <div class="genre">
              <ul class="flex justify-start items-center gap-3">
                <li class="bg-zinc-700 py-2 px-4 rounded-full">Horror</li>
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