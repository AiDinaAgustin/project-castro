<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  <title>Castro Studio</title>
</head>
<body class="bg-black">
  @include('dashboard.layouts.header')
  <main class="w-full min-h-screen flex">
    <!-- Main content -->
    @include('dashboard.layouts.aside')
    <div class="mb-4">
      <h3 class="text-2xl text-white font-bold mb-3" id="timeDisplay">Loading ...</h3>
      <div class="flex flex-wrap gap-4 text-xl text-white font-bold">
        <div class="relative overflow-hidden bg-pink-600 w-64 h-24 rounded-lg p-2">
          <p>Dibuat untuk kamu</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="../assets/img/page1.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-teal-700 w-64 h-24 rounded-lg p-2">
          <p>Rilis baru</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="../assets/img/page2.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-indigo-800 w-64 h-24 rounded-lg p-2">
          <p>Teman tidur</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="../assets/img/page3.jpg" alt="your music" width="80px">
        </div>
        <div class="relative overflow-hidden bg-purple-700 w-64 h-24 rounded-lg p-2">
          <p>Acara Langsung</p>
          <img class="absolute -rotate-45 -bottom-5 right-0" src="../assets/img/page4.jpg" alt="your music" width="80px">
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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

</html>