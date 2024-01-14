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
        <img class="mb-4" src="assets/img/logo.png" alt="logo">
        <ul class="flex flex-col gap-4 items-center md:items-start text-lg text-white font-bold">
          <a href="index.html">
            <li class="flex items-center gap-3">
              <img src="assets/img/Home.png" alt="" width="35px">
              <span class="hidden md:block text-2xl">
                Dashboard
              </span>
            </li>
          </a>
          <a href="search.html">
            <li class="flex items-center gap-3">
              <img src="assets/img/Search.png" alt="" width="35px">
              <span class="hidden md:block text-2xl">
                Search
              </span>
            </li>
          </a>
          <a href="live.html">
            <li class="flex items-center gap-3">
              <img src="assets/img/Video.png" alt="" width="35px">
              <span class="hidden md:block text-2xl">
                Live
              </span>
            </li>
          </a>
          <a href="collection.html">
            <li class="flex items-center gap-3">
              <img src="assets/img/Paper.png" alt="" width="35px">
              <span class="hidden md:block text-2xl">
                Koleksi
              </span>
            </li>
          </a>
          <a href="profile.html">
            <li class="flex items-center gap-3">
              <img src="assets/img/Profile.png" alt="" width="35px">
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
            style="width: 105%; padding: -10%; padding-bottom: 10px; background: linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0.579)), url('assets/img/Ellipse 46.png'); background-size: cover; background-position: center; width: 100%;">
            <div class="col-lg-7 col-12 d-flex align-items-center">
              <div>
                <h3 class="text-2xl text-white font-bold" style="font-size: 36px;">CASTRO STUDIO 6</h3>
                <h3 class="text-2xl font-bold" style="font-size: 16px; color: grey;">@castrostudio6</h3>
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

            </div>
            <div class="col-lg-5 col-12 d-flex justify-content-lg-end align-items-center">
              <img class="mt-5" src="assets/img/Ellipse 46.png" alt="" width="250px">
            </div>

            <div class="col-lg-7">
              <p class="text-xl text-white text-start" style="margin-top: -7%;">Lulusan D3 Keperawatan, Dota 2
                Player|Wearing @oursinsclothes|CP: +62 812-8881-654</p>
            </div>
            <div class="col-lg-5"></div>

            <div class="w-46 bg-yellow-400 flex items-start gap-2 py-2 px-2 md:px-16 rounded-lg mb-4"
              style="align-items: start; margin-left: 10px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.3764 20.0279L18.1628 8.66544C18.6403 8.0527 18.8101 7.3443 18.6509 6.62299C18.513 5.96726 18.1097 5.34377 17.5049 4.87078L16.0299 3.69906C14.7459 2.67784 13.1541 2.78534 12.2415 3.95706L11.2546 5.23735C11.1273 5.39752 11.1591 5.63401 11.3183 5.76301C11.3183 5.76301 13.812 7.76246 13.8651 7.80546C14.0349 7.96671 14.1622 8.1817 14.1941 8.43969C14.2471 8.94493 13.8969 9.41792 13.377 9.48242C13.1329 9.51467 12.8994 9.43942 12.7297 9.29967L10.1086 7.21422C9.98126 7.11855 9.79025 7.13898 9.68413 7.26797L3.45514 15.3303C3.0519 15.8355 2.91395 16.4912 3.0519 17.1255L3.84777 20.5761C3.89021 20.7589 4.04939 20.8879 4.24039 20.8879L7.74222 20.8449C8.37891 20.8341 8.97316 20.5439 9.3764 20.0279ZM14.2797 18.9533H19.9898C20.5469 18.9533 21 19.4123 21 19.9766C21 20.5421 20.5469 21 19.9898 21H14.2797C13.7226 21 13.2695 20.5421 13.2695 19.9766C13.2695 19.4123 13.7226 18.9533 14.2797 18.9533Z"
                  fill="black" />
              </svg>
              <a class="text-2xl text-black font-bold" style="font-size: 16px;" href="createMyPodcast.html">Ubah
                Profile</a>
            </div>

            <div class="col-lg-12">
              <div class="Profile flex gap-3">
                <ul class="flex text-gray-400 font-bold gap-3 mr-6">
                  <li class="active"><a href="profile.html">Karyaku</a></li>
                  <li><a href="aktivitas.html">Aktifitas</a></li>
                </ul>
              </div>
            </div>
          </div>



          <main class="w-full flex flex-col items-start py-4 px-5 gap-3 min-h-screen overflow-x-hidden px-0">
            <div class="row flex flex-row-reverse justify-content-start">
              <div class="col-lg-3 container">
                <div class="card ml-0" style="width: 250px; height: 250px; overflow: hidden; border-radius: 15px;">
                  <img src="assets/img/banner-1699624477532.jpg" alt="Card Image"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: center center;">
                </div>
                <p class="text-xl text-white font-bold text-start">Musuh Masyarakat</p>
              </div>
              <div class="col-lg-3 container">
                <div class="card ml-0" style="width: 250px; height: 250px; overflow: hidden; border-radius: 15px;">
                  <img src="assets/img/banner-1699624477532.jpg" alt="Card Image"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: center center;">
                </div>
                <p class="text-xl text-white font-bold text-start">Noice Official</p>
              </div>
            </div>
          </main>
          
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