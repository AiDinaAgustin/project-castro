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
  <div class="absolute mt-32 top-1/2 start-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col items-center gap-4">
    <img src="assets/img/logo.png" alt="" width="331px">

    <div class="w-auto bg-zinc-700 flex flex-col items-center py-4 px-8 md:px-24 rounded-lg">
      <form class="flex flex-col" action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label text-lg text-white">Name</label>
            <input type="text" class="form-control rounded-md @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label text-lg text-white">Username</label>
            <input type="text" class="form-control rounded-md @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-lg text-white">Email</label>
            <input type="email" class="form-control rounded-md @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label text-lg text-white">Password</label>
            <input type="password" class="form-control rounded-md @error('password') is-invalid @enderror" id="Password" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label text-lg text-white">Gender</label>
            <select class="form-select rounded-md" id="gender" name="gender" value="{{ old('gender') }}">
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="birth" class="form-label text-lg text-white">Birth</label>
            <input type="date" class="form-control rounded-md @error('birth') is-invalid @enderror" id="birth" name="birth" required value="{{ old('birth') }}">
            @error('birth')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label text-lg text-white">Podcast Image</label>
            <img class="img-preview img-fluid mb-2 col-sm-3">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="flex justify-between text-yellow-400 text-xs">
            <p>Sudah Punya akun? <a class="text-blue-500" href="/login">Login</a></p>
          </div>
          <div class="w-full d-flex justify-content-end">
            <button class="btn btn-warning bg-yellow-500 text-white" type="submit">Daftar</button>
        </div>
        
    </form>
    </div>
  </div>
  <script>
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html> 