<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/LOGO CASTRO (2) 2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-lg text-white">Name</label>
                <input type="text" class="form-control rounded-md @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <div class="invalid-feedback">
                  Please choose a name.
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label text-lg text-white">Username</label>
                <input type="text" class="form-control rounded-md" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-lg text-white">Email</label>
                <input type="email" class="form-control rounded-md" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label text-lg text-white">Password</label>
                <input type="password" class="form-control rounded-md" id="Password" name="password">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label text-lg text-white">Gender</label>
                <select class="form-select rounded-md" id="gender" name="gender">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="birth" class="form-label text-lg text-white">Birth</label>
                <input type="date" class="form-control rounded-md" id="birth" name="birth">
            </div>
            <div class="w-full d-flex justify-content-end">
                <button class="btn btn-warning bg-yellow-500 text-white" type="submit">Daftar</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
