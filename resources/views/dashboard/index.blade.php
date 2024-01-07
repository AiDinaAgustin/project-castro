@extends('dashboard.layouts.main')

@section('content')
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
@endsection