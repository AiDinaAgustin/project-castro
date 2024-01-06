<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">

  <script src="https://cdn.tailwindcss.com"></script>
  <title>Registrasi | Castro-Studio</title>
</head>
<body class="bg-black">
  <header class="w-full bg-zinc-900 flex items-center gap-10 text-xl font-bold text-white py-2 px-4">
    <img src="assets/img/LOGO CASTRO (2) 2.png" alt="" width="124">
    <p>Daftar Akun</p>
  </header>
  <main class="w-10/12 mx-auto">
    <form class="mx-auto" action="/register" method="post">
      <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="name">Name </label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="text" id="name" placeholder="Alexandra">
      </div>
      <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="username">Username</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="text" id="username" placeholder="Alexandra">
      </div>
      <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="email">Email</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="email" id="email" placeholder="Alexandra@gmail.com">
      </div>
      <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="Password">Password</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="password" id="Password" placeholder="Alex12345">
      </div>
      <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="gender">Gender (Male/Female)</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="text" id="gender" placeholder="Female">
      </div>
      <div class="form-group flex flex-col gap-2 mb-6">
        <label class="text-lg text-white" for="birth">Birth</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="date" id="birth">
      </div>
      <div class="w-full flex justify-end">
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white" type="submit">Daftar</button>
      </div>
    </form>
  </main>
</body>
</html>