<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login | Castro-Studio</title>
</head>
<body class="relative bg-black w-full h-screen">
  <div class="absolute top-1/2 start-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col items-center gap-4">
    <img src="assets/img/logo.png" alt="" width="331px">

    <div class="w-auto bg-zinc-700 flex flex-col items-center py-8 px-8 md:px-32 rounded-lg">
      @if(session('success'))
        <div class="alert alert-danger">
            {{ session('success') }}
        </div>
      @endif
      @if(session()->has('loginError'))
        <div class="alert alert-danger">
            {{ session('loginError') }}
        </div>
      @endif
      <form class="flex flex-col" action="/login" method="post">
        @csrf
        <h3 class="text-4xl text-yellow-400 text-center font-bold mb-6">Masuk</h3> 
        <div class="form-group flex flex-col gap-2 mb-3">
          <label class="text-lg text-yellow-400" for="email">Masukkan Email</label>
          <input class="w-80 rounded-md p-2 @error('email') is-invalid @enderror" type="email" id="email" name="email" required value="{{ old('email') }}" autofocus>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group flex flex-col gap-2 mb-3">
          <label class="text-lg text-yellow-400" for="password">Masukkan Password</label>
          <input class="w-80 rounded-md p-2" type="password" id="password" name="password" required>
        </div>
        <div class="flex justify-between text-yellow-400 text-xs mb-6">
          <p>Belum Punya akun? <a class="text-blue-500" href="/register">Daftar</a></p>
          <p><a class="text-blue-500" href="forgotPassword.html">Lupa Password</a></p>
        </div>
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white mx-auto" type="submit">Masuk</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html> 