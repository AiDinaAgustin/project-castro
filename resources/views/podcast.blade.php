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
        @include('partials.navbar')
      <div class="flex-1 bg-zinc-900 rounded-lg mx-auto py-2 px-4">
        <header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
          @include('partials.head')
        </header>
        @include('podcast.podcast')
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