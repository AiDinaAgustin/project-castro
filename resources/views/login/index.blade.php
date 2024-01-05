<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login | Castro-Studio</title>
</head>
<body class="relative bg-black w-full h-screen">
  <div class="absolute top-1/2 start-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col items-center gap-4">
    <img src="assets/img/logo.png" alt="" width="331px">
    <div class="w-auto bg-zinc-700 flex flex-col items-center py-8 px-8 md:px-32 rounded-lg">
      <form class="flex flex-col" action="" method="post">
        <h3 class="text-4xl text-yellow-400 text-center font-bold mb-6">Masuk</h3> 
        <div class="form-group flex flex-col gap-2 mb-3">
          <label class="text-lg text-yellow-400" for="email">Masukkan Email</label>
          <input class="w-80 rounded-md p-2" type="email" id="email">
        </div>
        <div class="form-group flex flex-col gap-2 mb-3">
          <label class="text-lg text-yellow-400" for="password">Masukkan Password</label>
          <input class="w-80 rounded-md p-2" type="password" id="password">
        </div>
        <div class="flex justify-between text-yellow-400 text-xs mb-6">
          <p>Belum Punya akun? <a class="text-blue-500" href="/register">Daftar</a></p>
          <p><a class="text-blue-500" href="forgotPassword.html">Lupa Password</a></p>
        </div>
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white mx-auto" type="submit">Masuk</button>
      </form>
    </div>
  </div>
</body>
</html> 