<div class="text-gray-400 font-bold mb-2 ">
    <div>
      <div class="flex justify-between mb-4">
        <div class="flex">
          <p class="text-sm mb-4">{{ $podcast->created_at->format('D M Y') }}</p>
        </div>
        <div class="flex">
          <svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7" /></svg>          <p class="text-sm mr-4 ml-1">{{ $podcast->comments->count() }}</p>

          {{-- comment --}}
          <svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3" />  <line x1="8" y1="9" x2="16" y2="9" />  <line x1="8" y1="13" x2="14" y2="13" /></svg>
          <p class="text-sm mr-4 ml-1">{{ $podcast->comments->count() }}</p>
        </div>
      </div>
    </div>
    <div class="text-md mb-4 text-white">
      {!! $podcast->body !!}
    </div>
    
    <div class="genre">
      <ul class="flex justify-start items-center gap-3">
        <li class="bg-zinc-700 py-2 px-4 rounded-full">{{ $podcast->category->name }}</li>
        {{-- <li class="bg-zinc-700 py-2 px-4 rounded-full">PG-13</li> --}}
      </ul>
    </div>
     @include('podcast.user-podcast')
    <div class="mt-6 text-xl text-white">Komentar</div>
    
  </div>