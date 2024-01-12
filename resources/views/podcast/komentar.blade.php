<!-- component -->
<!-- comment form -->
<div class="flex items-start justify-center shadow-lg mt-2 mb-4 max-w-full">
  <form class="w-full max-w-full rounded-lg px-4 pt-2" action="{{ route('comments.store', $podcast->slug) }}" method="post">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <h2 class="px-4 pt-3 pb-2 text-white text-lg">Add a new comment</h2>
      <div class="w-full md:w-full px-3 mb-2 mt-2">
        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="content" placeholder='Type Your Comment' required></textarea>
      </div>
      <div class="w-full md:w-full flex items-start md:w-full px-3">
        <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
          {{-- <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p> --}}
        </div>
        <div class="-mr-1">
          <input type='submit' class="bg-white text-yellow-500 text-bold font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-yellow-500 hover:text-white" value='Post Comment'>
        </div>
      </div>
    </div>
  </form>
</div>

<hr class="text-white mb-12">
@foreach ($podcast->comments as $comment)
  <div class="relative top-0">
    <!-- This is an example component -->
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-zinc-900 shadow-lg">
      <div class="relative flex gap-4">
        <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-16 w-16" alt="" loading="lazy">
        <div class="flex flex-col w-full">
          <div class="flex flex-row justify-between">
            <p class="relative whitespace-nowrap truncate overflow-hidden text-sm text-gray-400">&commat;{{ $comment->user->username }}</p>
            <a class="text-gray-500 text-lg" href="#"><i class="fa-solid fa-trash"></i></a>
          </div>
          <p class="text-gray-400 text-xs">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
      </div>
      <p class="-mt-2 text-sm text-white">{{ $comment->content }}</p>
    </div>
  </div>
@endforeach
  