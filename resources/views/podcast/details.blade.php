<div class="text-gray-400 font-bold mb-10 ">
    <div>
      <div class="flex justify-between">
        <div class="flex">
          <p class="text-lg mb-4">{{ $podcast->created_at->format('D M Y') }}</p>
        </div>
        <div class="flex">
          <p class="mr-2">rere</p>
          <p>dina</p>
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
  </div>