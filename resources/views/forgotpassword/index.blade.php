<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Forgot Password | Castro-Studio</title>
</head>
<body class="relative bg-black w-full h-screen">
  <div class="absolute top-1/2 start-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col items-center gap-4">
    <img src="assets/img/logo.png" alt="" width="331px">
    <div class="w-auto bg-zinc-700 flex flex-col items-center py-8 px-8 md:px-32 rounded-lg">
      <form class="flex flex-col" action="{{ route('password.email') }}" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
        <h3 class="text-4xl text-yellow-400 text-center font-bold mb-6">Lupa Password</h3>
        <h4 class="text-2xl text-white font-bold">Pesan</h4>
        <p class="text-base text-white mb-6">Masukkan Email anda dan kode ketik akan dikirimkan</p>
        <div class="form-group flex flex-col gap-2 mb-6">
          <label class="text-lg text-yellow-400" for="email" name="email">Masukkan Email</label>
          <input class="form-control w-80 rounded-md p-2" type="email" id="email" name="email">
        </div>
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white mx-auto" type="submit">Masuk</button>
      </form>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>