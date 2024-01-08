@extends('dashboard.layouts.main')

@section('content')

<div class="mb-4 w-50 ml-10 col-lg-8 ">
    <form class="mx-auto" action="/dashboard/podcasts" method="post">
        <div class="form-group flex flex-col gap-2 mb-3">
        <label class="h-full text-lg text-white" for="name">Nama</label>
        <input class="rounded-md outline-yellow-700 p-2" type="text" id="name" placeholder="Alexandra">
        </div>
        <div class="form-group flex flex-col gap-2 mb-3">
        <label class="text-lg text-white" for="username">Username (Using @)</label>
        <input class="w-full rounded-md outline-yellow-700 p-2" type="text" id="username" placeholder="@Alexandra">
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
        <input class="w-full rounded-md outline-yellow-700 p-2" type="text" id="birth">
        </div>
        <div class="w-full flex justify-end">
        <button class="bg-yellow-400 py-2 px-4 rounded-md text-white" type="submit">Daftar</button>
        </div>
    </form>
</div>

@endsection