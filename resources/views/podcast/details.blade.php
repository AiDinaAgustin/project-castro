<div class="text-gray-400 font-bold mb-2 ">
    <div>
      <div class="flex justify-between mb-4">
        <div class="flex">
          <p class="text-sm mb-4">{{ $podcast->created_at->format('D M Y') }}</p>
        </div>
        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
            <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
          </svg>
          <p class="text-sm mr-4 ml-1">{{ $podcast->likes()->count() }}</p>

          {{-- comment --}}
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" clip-rule="evenodd" />
          </svg>
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