<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- buatkan link favicon --}}
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
    {{-- buatkan link fontawesome --}}
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

    .active {
      color: white;
      border-bottom: 2px solid #F9D80F;
    }
  </style>  
  <title>Castro Studio | {{ $title }}</title>
</head>
<body class="bg-black">
  <div class="relative my-5 mx-3">
    <div class="show-btn absolute z-50 w-8 h-8 rounded-full flex justify-center items-center bg-amber-400 left-0 inset-y-0 sm:hidden my-auto">
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
    </div>
    <div class="flex items-start gap-4">
      @include('partials.navbar')
      <div class="overflow-hidden flex-1 bg-zinc-900 rounded-lg mx-auto p-4">
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
              <li class="{{ ($title === "Podcast") ? 'active' : '' }}"><a href="/">Buat Kamu</a></li>
              <li class="{{ ($title === "Misteri") ? 'active' : '' }}"><a href="/misteri">Misteri</a></li>
              <li class="{{ ($title === "Supranatural") ? 'active' : '' }}"><a href="/supranatural">Supranatural</a></li>
              <li class="{{ ($title === "Thriller") ? 'active' : '' }}"><a href="/thriller">Thriller</a></li>
            </ul>
            <button class="bg-yellow-500 rounded-lg text-lg text-white font-bold px-4 py-1"><a href="login.html">Login</a></button>
          </div>
        </header>
        <main class="w-full min-h-screen overflow-x-hidden">
          <!-- Main content -->
          @yield('content')
        </main>
      </div>
    </div>
  </div>
</body>
<script>
  // Time at now 
  const timeDays = () => {
    let time = new Date()
    let hours = time.getHours()
    let greeting
    if (hours >= 0 && hours < 12) {
      greeting = 'Good Morning';
    } else if (hours >= 12 && hours < 18) {
      greeting = 'Good Afternoon';
    } else {
      greeting = 'Good Evening';
    }
    return greeting
  }

  const updateTimeDisplay = () => {
      const timeDisplay = document.getElementById('timeDisplay');
      timeDisplay.textContent = timeDays();
    }

    setInterval(updateTimeDisplay, 1000);

    updateTimeDisplay();
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const mySwiper = new Swiper('.mySwiper', {
    // Default parameter
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 5000,
    },
    centeredSlides: true,
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
  showButton.addEventListener(('click'), ()=> {
    modalMenu.classList.toggle('show');
  })
</script>

</html>