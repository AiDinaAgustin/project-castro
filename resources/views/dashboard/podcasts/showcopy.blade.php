<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <style>
    html,
body,
.view {
  height: 100%;
}

#mobile-box {
  width: 360px;
}

.card {
  -webkit-border-radius: 10px;
  border-radius: 10px;
}

.card .view {
  -webkit-border-top-left-radius: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  border-top-right-radius: 10px;
}

.card h5 a {
  color: #0d47a1;
}

.card h5 a:hover {
  color: #072f6b;
}

#pButton {
  float: left;
}

#timeline {
  width: 90%;
  height: 2px;
  margin-top: 20px;
  margin-left: 10px;
  float: left;
  -webkit-border-radius: 15px;
  border-radius: 15px;
  background: rgba(0, 0, 0, 0.3);
}

#pButton {
  margin-top: 12px;
  cursor: pointer;
}

#playhead {
  width: 8px;
  height: 8px;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  margin-top: -3px;
  background: black;
  cursor: pointer;
}
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
  
  {{--  --}}
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
          {{-- <div class="relative w-player flex flex-col rounded-xl shadow-player-light bg-player-light-background border border-player-light-border dark:shadow-player-dark dark:bg-player-dark-background dark:border-player-dark-border dark:backdrop-blur-xl">
            <div class="px-10 pt-10 pb-4 flex items-center z-50">
              <img class="w-24 h-24 rounded-md mr-6 border border-bg-player-light-background dark:border-cover-dark-border" src="{{ asset('storage/' . $podcast->image) }}">
    
              <div class="flex flex-col">
                <span class="font-sans text-lg font-medium leading-7 text-white dark:text-white">{{ $podcast->title }}</span>
                <span class="font-sans text-base font-medium leading-6 text-gray-500 dark:text-gray-400">{{ $podcast->author->name }}</span>
                <span class="font-sans text-base font-medium leading-6 text-gray-500 dark:text-gray-400">{{ $podcast->category->name }}</span>
              </div>
            </div>
            <div class="w-full flex flex-col px-10 pb-6 z-50">
              <input type="range" id="song-percentage-played" class="amplitude-song-slider mb-3" step=".1"/>
              <div class="flex w-full justify-between">
                <span class="amplitude-current-time text-xs font-sans tracking-wide font-medium text-sky-500 dark:text-sky-300"></span>
                <span class="amplitude-duration-time text-xs font-sans tracking-wide font-medium text-gray-500"></span>
              </div>
            </div>
            <div class="h-control-panel px-10 rounded-b-xl bg-control-panel-light-background border-t border-gray-200 flex items-center justify-between z-50 dark:bg-control-panel-dark-background dark:border-gray-900">
              <div class="cursor-pointer" id="song-saved">
                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25 7C25 3.68629 22.2018 1 18.75 1C16.1692 1 13.9537 2.5017 13 4.64456C12.0463 2.5017 9.83082 1 7.25 1C3.79822 1 1 3.68629 1 7C1 14.6072 8.49219 20.1822 11.6365 22.187C12.4766 22.7226 13.5234 22.7226 14.3635 22.187C17.5078 20.1822 25 14.6072 25 7Z" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="cursor-pointer amplitude-shuffle">
                <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 20C0.447715 20 0 20.4477 0 21C0 21.5523 0.447715 22 1 22V20ZM7.75736 19.2426L8.46447 19.9497H8.46447L7.75736 19.2426ZM20.2426 6.75736L19.5355 6.05025L19.5355 6.05025L20.2426 6.75736ZM27 5L27.7071 5.70711C28.0976 5.31658 28.0976 4.68342 27.7071 4.29289L27 5ZM27 21L27.7071 21.7071C28.0976 21.3166 28.0976 20.6834 27.7071 20.2929L27 21ZM1 4C0.447715 4 0 4.44772 0 5C0 5.55228 0.447715 6 1 6V4ZM7.75736 6.75736L8.46447 6.05025L7.75736 6.75736ZM20.2426 19.2426L20.9497 18.5355L20.2426 19.2426ZM10.4645 10.8787C10.855 11.2692 11.4882 11.2692 11.8787 10.8787C12.2692 10.4882 12.2692 9.85499 11.8787 9.46447L10.4645 10.8787ZM17.5355 15.1213C17.145 14.7308 16.5118 14.7308 16.1213 15.1213C15.7308 15.5118 15.7308 16.145 16.1213 16.5355L17.5355 15.1213ZM23.7071 0.292893C23.3166 -0.0976311 22.6834 -0.0976311 22.2929 0.292893C21.9024 0.683417 21.9024 1.31658 22.2929 1.70711L23.7071 0.292893ZM22.2929 8.29289C21.9024 8.68342 21.9024 9.31658 22.2929 9.70711C22.6834 10.0976 23.3166 10.0976 23.7071 9.70711L22.2929 8.29289ZM23.7071 16.2929C23.3166 15.9024 22.6834 15.9024 22.2929 16.2929C21.9024 16.6834 21.9024 17.3166 22.2929 17.7071L23.7071 16.2929ZM22.2929 24.2929C21.9024 24.6834 21.9024 25.3166 22.2929 25.7071C22.6834 26.0976 23.3166 26.0976 23.7071 25.7071L22.2929 24.2929ZM1 22H3.51472V20H1V22ZM8.46447 19.9497L20.9497 7.46446L19.5355 6.05025L7.05025 18.5355L8.46447 19.9497ZM24.4853 6H27V4H24.4853V6ZM20.9497 7.46446C21.8874 6.52678 23.1592 6 24.4853 6V4C22.6288 4 20.8483 4.7375 19.5355 6.05025L20.9497 7.46446ZM3.51472 22C5.37123 22 7.15171 21.2625 8.46447 19.9497L7.05025 18.5355C6.11257 19.4732 4.8408 20 3.51472 20V22ZM27 20H24.4853V22H27V20ZM3.51472 4H1V6H3.51472V4ZM8.46447 6.05025C7.15171 4.7375 5.37123 4 3.51472 4V6C4.8408 6 6.11257 6.52678 7.05025 7.46446L8.46447 6.05025ZM24.4853 20C23.1592 20 21.8874 19.4732 20.9497 18.5355L19.5355 19.9497C20.8483 21.2625 22.6288 22 24.4853 22V20ZM11.8787 9.46447L8.46447 6.05025L7.05025 7.46446L10.4645 10.8787L11.8787 9.46447ZM20.9497 18.5355L17.5355 15.1213L16.1213 16.5355L19.5355 19.9497L20.9497 18.5355ZM22.2929 1.70711L26.2929 5.70711L27.7071 4.29289L23.7071 0.292893L22.2929 1.70711ZM26.2929 4.29289L22.2929 8.29289L23.7071 9.70711L27.7071 5.70711L26.2929 4.29289ZM22.2929 17.7071L26.2929 21.7071L27.7071 20.2929L23.7071 16.2929L22.2929 17.7071ZM26.2929 20.2929L22.2929 24.2929L23.7071 25.7071L27.7071 21.7071L26.2929 20.2929Z" fill="#94A3B8"/>
                </svg>
              </div>
              <div class="cursor-pointer amplitude-prev">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26 7C26 5.76393 24.5889 5.05836 23.6 5.8L11.6 14.8C10.8 15.4 10.8 16.6 11.6 17.2L23.6 26.2C24.5889 26.9416 26 26.2361 26 25V7Z" fill="#94A3B8" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M6 5L6 27" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>	
              </div>
              <div class="cursor-pointer amplitude-play-pause w-24 h-24 rounded-full bg-white border border-play-pause-light-border shadow-xl flex items-center justify-center dark:bg-play-pause-dark-background dark:border-play-pause-dark-border">
                <svg id="play-icon" class="ml-[10px]" width="31" height="37" viewBox="0 0 31 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M29.6901 16.6608L4.00209 0.747111C2.12875 -0.476923 0.599998 0.421814 0.599998 2.75545V33.643C0.599998 35.9728 2.12747 36.8805 4.00209 35.6514L29.6901 19.7402C29.6901 19.7402 30.6043 19.0973 30.6043 18.2012C30.6043 17.3024 29.6901 16.6608 29.6901 16.6608Z" class="fill-slate-500 dark:fill-slate-400"/>
                </svg>	
                              
                <svg id="pause-icon" width="24" height="36" viewBox="0 0 24 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="6" height="36" rx="3" class="fill-slate-500 dark:fill-slate-400"/>
                  <rect x="18" width="6" height="36" rx="3" class="fill-slate-500 dark:fill-slate-400" />
                </svg>	
              </div>
              <div class="cursor-pointer amplitude-next">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 7C6 5.76393 7.41115 5.05836 8.4 5.8L20.4 14.8C21.2 15.4 21.2 16.6 20.4 17.2L8.4 26.2C7.41115 26.9416 6 26.2361 6 25V7Z" fill="#94A3B8" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                  <path d="M26 5L26 27" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>	
              </div>
              <div class="cursor-pointer amplitude-repeat-song">
                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.7071 15.7071C18.0976 15.3166 18.0976 14.6834 17.7071 14.2929C17.3166 13.9024 16.6834 13.9024 16.2929 14.2929L17.7071 15.7071ZM13 19L12.2929 18.2929C11.9024 18.6834 11.9024 19.3166 12.2929 19.7071L13 19ZM16.2929 23.7071C16.6834 24.0976 17.3166 24.0976 17.7071 23.7071C18.0976 23.3166 18.0976 22.6834 17.7071 22.2929L16.2929 23.7071ZM19.9359 18.7035L19.8503 17.7072L19.9359 18.7035ZM8.95082 19.9005C9.50243 19.9277 9.97163 19.5025 9.99879 18.9509C10.026 18.3993 9.6008 17.9301 9.04918 17.9029L8.95082 19.9005ZM6.06408 18.7035L5.97851 19.6998L6.06408 18.7035ZM1.07501 13.4958L0.075929 13.5387L1.07501 13.4958ZM1.07501 6.50423L0.0759292 6.46127L1.07501 6.50423ZM6.06409 1.29649L6.14965 2.29282L6.06409 1.29649ZM19.9359 1.29649L19.8503 2.29283L19.9359 1.29649ZM24.925 6.50423L23.9259 6.54718L24.925 6.50423ZM24.925 13.4958L25.9241 13.5387V13.5387L24.925 13.4958ZM16.2929 14.2929L12.2929 18.2929L13.7071 19.7071L17.7071 15.7071L16.2929 14.2929ZM12.2929 19.7071L16.2929 23.7071L17.7071 22.2929L13.7071 18.2929L12.2929 19.7071ZM19.8503 17.7072C17.5929 17.901 15.3081 18 13 18V20C15.3653 20 17.7072 19.8986 20.0215 19.6998L19.8503 17.7072ZM9.04918 17.9029C8.07792 17.8551 7.1113 17.7898 6.14964 17.7072L5.97851 19.6998C6.96438 19.7845 7.95525 19.8515 8.95082 19.9005L9.04918 17.9029ZM2.07408 13.4528C2.02486 12.3081 2 11.157 2 10H0C0 11.1856 0.0254804 12.3654 0.075929 13.5387L2.07408 13.4528ZM2 10C2 8.84302 2.02486 7.69192 2.07408 6.54718L0.0759292 6.46127C0.0254806 7.63461 0 8.81436 0 10H2ZM6.14965 2.29282C8.4071 2.09896 10.6919 2 13 2V0C10.6347 0 8.29281 0.101411 5.97853 0.30016L6.14965 2.29282ZM13 2C15.3081 2 17.5929 2.09896 19.8503 2.29283L20.0215 0.30016C17.7072 0.101411 15.3653 0 13 0V2ZM23.9259 6.54718C23.9751 7.69192 24 8.84302 24 10H26C26 8.81436 25.9745 7.63461 25.9241 6.46127L23.9259 6.54718ZM24 10C24 11.157 23.9751 12.3081 23.9259 13.4528L25.9241 13.5387C25.9745 12.3654 26 11.1856 26 10H24ZM19.8503 2.29283C22.092 2.48534 23.8293 4.29889 23.9259 6.54718L25.9241 6.46127C25.7842 3.20897 23.2653 0.578736 20.0215 0.30016L19.8503 2.29283ZM6.14964 17.7072C3.90797 17.5147 2.17075 15.7011 2.07408 13.4528L0.075929 13.5387C0.215764 16.791 2.7347 19.4213 5.97851 19.6998L6.14964 17.7072ZM2.07408 6.54718C2.17075 4.29889 3.90798 2.48534 6.14965 2.29282L5.97853 0.30016C2.73471 0.578735 0.215764 3.20897 0.0759292 6.46127L2.07408 6.54718ZM20.0215 19.6998C23.2653 19.4213 25.7842 16.791 25.9241 13.5387L23.9259 13.4528C23.8292 15.7011 22.092 17.5147 19.8503 17.7072L20.0215 19.6998Z" fill="#94A3B8"/>
                </svg>
              </div>
              <div>
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 7H24.5V5H7.5V7ZM7.5 12H24.5V10H7.5V12ZM24.5 12C26.433 12 28 10.433 28 8.5H26C26 9.32843 25.3284 10 24.5 10V12ZM7.5 10C6.67157 10 6 9.32843 6 8.5H4C4 10.433 5.567 12 7.5 12V10ZM24.5 7C25.3284 7 26 7.67157 26 8.5H28C28 6.567 26.433 5 24.5 5V7ZM7.5 5C5.567 5 4 6.567 4 8.5H6C6 7.67157 6.67157 7 7.5 7V5Z" fill="#94A3B8"/>
                  <path d="M5 15C4.44772 15 4 15.4477 4 16C4 16.5523 4.44772 17 5 17V15ZM27 17C27.5523 17 28 16.5523 28 16C28 15.4477 27.5523 15 27 15V17ZM5 17H27V15H5V17Z" fill="#94A3B8"/>
                  <path d="M5 20C4.44772 20 4 20.4477 4 21C4 21.5523 4.44772 22 5 22V20ZM27 22C27.5523 22 28 21.5523 28 21C28 20.4477 27.5523 20 27 20V22ZM5 22H27V20H5V22Z" fill="#94A3B8"/>
                  <path d="M5 25C4.44772 25 4 25.4477 4 26C4 26.5523 4.44772 27 5 27V25ZM27 27C27.5523 27 28 26.5523 28 26C28 25.4477 27.5523 25 27 25V27ZM5 27H27V25H5V27Z" fill="#94A3B8"/>
                </svg>	
              </div>
            </div>
            <div class="hidden top-14 w-full absolute ml-auto mr-auto left-0 right-0 text-center max-w-lg h-72 rounded-full bg-highlight blur-2xl dark:block">
    
            </div>
          </div> --}}
          <!-- Main content -->
          <div class="relative">
            {{-- <div class="cover" style="bg-zinc-900"> </div> --}}
            @if ($podcast->image)
            <div class="cover" style="background-image: url('{{ asset('storage/' . $podcast->image) }}');"> </div>
            @else
            <div class="cover" style="background-image: url('https://source.unsplash.com/1000x270/?{{ $podcast->category->name }}');"> </div>
            @endif
            <div class="absolute w-full w-max bottom-24 start-1/2 -translate-x-1/2 flex flex-col justify-center items-center gap-5 text-2xl text-white font-bold">
              {{-- @if ($podcast->image)
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
              <p>{{ $podcast->created_at->diffForHumans() }}</p> --}}
            <div class="bg-white rounded-xl">
              <div class="relative w-player flex flex-col rounded-xl shadow-player-light bg-player-light-background border border-player-light-border dark:shadow-player-dark dark:bg-player-dark-background dark:border-player-dark-border dark:backdrop-blur-xl">
                <div class="px-10 pt-10 pb-4 flex items-center z-50">
                  <img class="w-24 h-24 rounded-md mr-6 border border-bg-player-light-background dark:border-cover-dark-border" src="{{ asset('storage/' . $podcast->image) }}">
        
                  <div class="flex flex-col">
                    <span class="font-sans text-lg font-medium leading-7 text-slate-900 dark:text-white">{{ $podcast->title }}</span>
                    <span class="font-sans text-base font-medium leading-6 text-gray-500 dark:text-gray-400">{{ $podcast->author->name }}</span>
                    <span class="font-sans text-base font-medium leading-6 text-gray-500 dark:text-gray-400">{{ $podcast->category->name }}</span>
                  </div>
                </div>
                <div class="w-full flex flex-col px-10 pb-6 z-50">
                  <input type="range" id="song-percentage-played" class="amplitude-song-slider mb-3" step=".1"/>
                  <div class="flex w-full justify-between">
                    <span class="amplitude-current-time text-xs font-sans tracking-wide font-medium text-sky-500 dark:text-sky-300"></span>
                    <span class="amplitude-duration-time text-xs font-sans tracking-wide font-medium text-gray-500"></span>
                  </div>
                </div>
                <div class="h-control-panel px-10 rounded-b-xl bg-control-panel-light-background border-t border-gray-200 flex items-center justify-between z-50 dark:bg-control-panel-dark-background dark:border-gray-900">
                  <div class="cursor-pointer" id="song-saved">
                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M25 7C25 3.68629 22.2018 1 18.75 1C16.1692 1 13.9537 2.5017 13 4.64456C12.0463 2.5017 9.83082 1 7.25 1C3.79822 1 1 3.68629 1 7C1 14.6072 8.49219 20.1822 11.6365 22.187C12.4766 22.7226 13.5234 22.7226 14.3635 22.187C17.5078 20.1822 25 14.6072 25 7Z" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                  </div>
                  <div class="cursor-pointer amplitude-shuffle">
                    <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 20C0.447715 20 0 20.4477 0 21C0 21.5523 0.447715 22 1 22V20ZM7.75736 19.2426L8.46447 19.9497H8.46447L7.75736 19.2426ZM20.2426 6.75736L19.5355 6.05025L19.5355 6.05025L20.2426 6.75736ZM27 5L27.7071 5.70711C28.0976 5.31658 28.0976 4.68342 27.7071 4.29289L27 5ZM27 21L27.7071 21.7071C28.0976 21.3166 28.0976 20.6834 27.7071 20.2929L27 21ZM1 4C0.447715 4 0 4.44772 0 5C0 5.55228 0.447715 6 1 6V4ZM7.75736 6.75736L8.46447 6.05025L7.75736 6.75736ZM20.2426 19.2426L20.9497 18.5355L20.2426 19.2426ZM10.4645 10.8787C10.855 11.2692 11.4882 11.2692 11.8787 10.8787C12.2692 10.4882 12.2692 9.85499 11.8787 9.46447L10.4645 10.8787ZM17.5355 15.1213C17.145 14.7308 16.5118 14.7308 16.1213 15.1213C15.7308 15.5118 15.7308 16.145 16.1213 16.5355L17.5355 15.1213ZM23.7071 0.292893C23.3166 -0.0976311 22.6834 -0.0976311 22.2929 0.292893C21.9024 0.683417 21.9024 1.31658 22.2929 1.70711L23.7071 0.292893ZM22.2929 8.29289C21.9024 8.68342 21.9024 9.31658 22.2929 9.70711C22.6834 10.0976 23.3166 10.0976 23.7071 9.70711L22.2929 8.29289ZM23.7071 16.2929C23.3166 15.9024 22.6834 15.9024 22.2929 16.2929C21.9024 16.6834 21.9024 17.3166 22.2929 17.7071L23.7071 16.2929ZM22.2929 24.2929C21.9024 24.6834 21.9024 25.3166 22.2929 25.7071C22.6834 26.0976 23.3166 26.0976 23.7071 25.7071L22.2929 24.2929ZM1 22H3.51472V20H1V22ZM8.46447 19.9497L20.9497 7.46446L19.5355 6.05025L7.05025 18.5355L8.46447 19.9497ZM24.4853 6H27V4H24.4853V6ZM20.9497 7.46446C21.8874 6.52678 23.1592 6 24.4853 6V4C22.6288 4 20.8483 4.7375 19.5355 6.05025L20.9497 7.46446ZM3.51472 22C5.37123 22 7.15171 21.2625 8.46447 19.9497L7.05025 18.5355C6.11257 19.4732 4.8408 20 3.51472 20V22ZM27 20H24.4853V22H27V20ZM3.51472 4H1V6H3.51472V4ZM8.46447 6.05025C7.15171 4.7375 5.37123 4 3.51472 4V6C4.8408 6 6.11257 6.52678 7.05025 7.46446L8.46447 6.05025ZM24.4853 20C23.1592 20 21.8874 19.4732 20.9497 18.5355L19.5355 19.9497C20.8483 21.2625 22.6288 22 24.4853 22V20ZM11.8787 9.46447L8.46447 6.05025L7.05025 7.46446L10.4645 10.8787L11.8787 9.46447ZM20.9497 18.5355L17.5355 15.1213L16.1213 16.5355L19.5355 19.9497L20.9497 18.5355ZM22.2929 1.70711L26.2929 5.70711L27.7071 4.29289L23.7071 0.292893L22.2929 1.70711ZM26.2929 4.29289L22.2929 8.29289L23.7071 9.70711L27.7071 5.70711L26.2929 4.29289ZM22.2929 17.7071L26.2929 21.7071L27.7071 20.2929L23.7071 16.2929L22.2929 17.7071ZM26.2929 20.2929L22.2929 24.2929L23.7071 25.7071L27.7071 21.7071L26.2929 20.2929Z" fill="#94A3B8"/>
                    </svg>
                  </div>
                  <div class="cursor-pointer amplitude-prev">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26 7C26 5.76393 24.5889 5.05836 23.6 5.8L11.6 14.8C10.8 15.4 10.8 16.6 11.6 17.2L23.6 26.2C24.5889 26.9416 26 26.2361 26 25V7Z" fill="#94A3B8" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                      <path d="M6 5L6 27" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>	
                  </div>
                  <div class="cursor-pointer amplitude-play-pause w-24 h-24 rounded-full bg-white border border-play-pause-light-border shadow-xl flex items-center justify-center dark:bg-play-pause-dark-background dark:border-play-pause-dark-border">
                    <svg id="play-icon" class="ml-[10px]" width="31" height="37" viewBox="0 0 31 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M29.6901 16.6608L4.00209 0.747111C2.12875 -0.476923 0.599998 0.421814 0.599998 2.75545V33.643C0.599998 35.9728 2.12747 36.8805 4.00209 35.6514L29.6901 19.7402C29.6901 19.7402 30.6043 19.0973 30.6043 18.2012C30.6043 17.3024 29.6901 16.6608 29.6901 16.6608Z" class="fill-slate-500 dark:fill-slate-400"/>
                    </svg>	
                                  
                    <svg id="pause-icon" width="24" height="36" viewBox="0 0 24 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="6" height="36" rx="3" class="fill-slate-500 dark:fill-slate-400"/>
                      <rect x="18" width="6" height="36" rx="3" class="fill-slate-500 dark:fill-slate-400" />
                    </svg>	
                  </div>
                  <div class="cursor-pointer amplitude-next">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 7C6 5.76393 7.41115 5.05836 8.4 5.8L20.4 14.8C21.2 15.4 21.2 16.6 20.4 17.2L8.4 26.2C7.41115 26.9416 6 26.2361 6 25V7Z" fill="#94A3B8" stroke="#94A3B8" stroke-width="2" stroke-linejoin="round"/>
                      <path d="M26 5L26 27" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>	
                  </div>
                  <div class="cursor-pointer amplitude-repeat-song">
                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.7071 15.7071C18.0976 15.3166 18.0976 14.6834 17.7071 14.2929C17.3166 13.9024 16.6834 13.9024 16.2929 14.2929L17.7071 15.7071ZM13 19L12.2929 18.2929C11.9024 18.6834 11.9024 19.3166 12.2929 19.7071L13 19ZM16.2929 23.7071C16.6834 24.0976 17.3166 24.0976 17.7071 23.7071C18.0976 23.3166 18.0976 22.6834 17.7071 22.2929L16.2929 23.7071ZM19.9359 18.7035L19.8503 17.7072L19.9359 18.7035ZM8.95082 19.9005C9.50243 19.9277 9.97163 19.5025 9.99879 18.9509C10.026 18.3993 9.6008 17.9301 9.04918 17.9029L8.95082 19.9005ZM6.06408 18.7035L5.97851 19.6998L6.06408 18.7035ZM1.07501 13.4958L0.075929 13.5387L1.07501 13.4958ZM1.07501 6.50423L0.0759292 6.46127L1.07501 6.50423ZM6.06409 1.29649L6.14965 2.29282L6.06409 1.29649ZM19.9359 1.29649L19.8503 2.29283L19.9359 1.29649ZM24.925 6.50423L23.9259 6.54718L24.925 6.50423ZM24.925 13.4958L25.9241 13.5387V13.5387L24.925 13.4958ZM16.2929 14.2929L12.2929 18.2929L13.7071 19.7071L17.7071 15.7071L16.2929 14.2929ZM12.2929 19.7071L16.2929 23.7071L17.7071 22.2929L13.7071 18.2929L12.2929 19.7071ZM19.8503 17.7072C17.5929 17.901 15.3081 18 13 18V20C15.3653 20 17.7072 19.8986 20.0215 19.6998L19.8503 17.7072ZM9.04918 17.9029C8.07792 17.8551 7.1113 17.7898 6.14964 17.7072L5.97851 19.6998C6.96438 19.7845 7.95525 19.8515 8.95082 19.9005L9.04918 17.9029ZM2.07408 13.4528C2.02486 12.3081 2 11.157 2 10H0C0 11.1856 0.0254804 12.3654 0.075929 13.5387L2.07408 13.4528ZM2 10C2 8.84302 2.02486 7.69192 2.07408 6.54718L0.0759292 6.46127C0.0254806 7.63461 0 8.81436 0 10H2ZM6.14965 2.29282C8.4071 2.09896 10.6919 2 13 2V0C10.6347 0 8.29281 0.101411 5.97853 0.30016L6.14965 2.29282ZM13 2C15.3081 2 17.5929 2.09896 19.8503 2.29283L20.0215 0.30016C17.7072 0.101411 15.3653 0 13 0V2ZM23.9259 6.54718C23.9751 7.69192 24 8.84302 24 10H26C26 8.81436 25.9745 7.63461 25.9241 6.46127L23.9259 6.54718ZM24 10C24 11.157 23.9751 12.3081 23.9259 13.4528L25.9241 13.5387C25.9745 12.3654 26 11.1856 26 10H24ZM19.8503 2.29283C22.092 2.48534 23.8293 4.29889 23.9259 6.54718L25.9241 6.46127C25.7842 3.20897 23.2653 0.578736 20.0215 0.30016L19.8503 2.29283ZM6.14964 17.7072C3.90797 17.5147 2.17075 15.7011 2.07408 13.4528L0.075929 13.5387C0.215764 16.791 2.7347 19.4213 5.97851 19.6998L6.14964 17.7072ZM2.07408 6.54718C2.17075 4.29889 3.90798 2.48534 6.14965 2.29282L5.97853 0.30016C2.73471 0.578735 0.215764 3.20897 0.0759292 6.46127L2.07408 6.54718ZM20.0215 19.6998C23.2653 19.4213 25.7842 16.791 25.9241 13.5387L23.9259 13.4528C23.8292 15.7011 22.092 17.5147 19.8503 17.7072L20.0215 19.6998Z" fill="#94A3B8"/>
                    </svg>
                  </div>
                  <div>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 7H24.5V5H7.5V7ZM7.5 12H24.5V10H7.5V12ZM24.5 12C26.433 12 28 10.433 28 8.5H26C26 9.32843 25.3284 10 24.5 10V12ZM7.5 10C6.67157 10 6 9.32843 6 8.5H4C4 10.433 5.567 12 7.5 12V10ZM24.5 7C25.3284 7 26 7.67157 26 8.5H28C28 6.567 26.433 5 24.5 5V7ZM7.5 5C5.567 5 4 6.567 4 8.5H6C6 7.67157 6.67157 7 7.5 7V5Z" fill="#94A3B8"/>
                      <path d="M5 15C4.44772 15 4 15.4477 4 16C4 16.5523 4.44772 17 5 17V15ZM27 17C27.5523 17 28 16.5523 28 16C28 15.4477 27.5523 15 27 15V17ZM5 17H27V15H5V17Z" fill="#94A3B8"/>
                      <path d="M5 20C4.44772 20 4 20.4477 4 21C4 21.5523 4.44772 22 5 22V20ZM27 22C27.5523 22 28 21.5523 28 21C28 20.4477 27.5523 20 27 20V22ZM5 22H27V20H5V22Z" fill="#94A3B8"/>
                      <path d="M5 25C4.44772 25 4 25.4477 4 26C4 26.5523 4.44772 27 5 27V25ZM27 27C27.5523 27 28 26.5523 28 26C28 25.4477 27.5523 25 27 25V27ZM5 27H27V25H5V27Z" fill="#94A3B8"/>
                    </svg>	
                  </div>
                </div>
                <div class="hidden top-14 w-full absolute ml-auto mr-auto left-0 right-0 text-center max-w-lg h-72 rounded-full bg-highlight blur-2xl dark:block">
        
                </div>
              </div>
            </div>
            </div>
          </div>

          <audio controls src="{{ asset('storage/' . $podcast->audio) }}"></audio>
          
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
        </main>
      </div>
    </div>
  </div>
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/amplitudejs@5.2.0/dist/amplitude.js'></script><script  src="script.js"></script>
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