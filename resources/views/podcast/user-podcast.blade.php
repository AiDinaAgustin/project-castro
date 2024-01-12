<div class="w-full h-16 flex items-center justify-between px-16 mt-4 rounded-lg bg-zinc-700 bottom-5">
    <div class="flex gap-x-2">
      @if ($podcast->image)
      <img class="w-[65px]" src="{{ asset('storage/' . $podcast->image) }}" alt="" style="width: 65px; height: 50px; object-fit: cover;">
      @else
      <img class="w-[65px]" src="https://source.unsplash.com/500x270/?{{ $podcast->category->name }}" alt="">
      @endif
      <div class="flex flex-col items-start text-white ml-10">
        <!-- title -->
        <a href="/authors/{{ $podcast->author->username }}"><p>{{ $podcast->author->name }}</p></a>
        <!-- durations -->
        <div class="truncate text-slate-400 text-xs mt-2"><a href="/categories/{{ $podcast->category->slug }}">{{ $podcast->category->name }}</a></div>
      </div>
    </div>
    <svg class="play_btn" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.166626 21.0121C0.166626 9.51303 9.5175 0.166672 21 0.166672C32.4824 0.166672 41.8333 9.51303 41.8333 21.0121C41.8333 32.487 32.4824 41.8333 21 41.8333C9.5175 41.8333 0.166626 32.487 0.166626 21.0121ZM28.6415 23.1205C28.8627 22.8994 29.1443 22.5577 29.2046 22.4773C29.5263 22.0552 29.6872 21.5326 29.6872 21.0121C29.6872 20.4272 29.5062 19.8845 29.1644 19.4423C29.1364 19.4143 29.0815 19.3546 29.01 19.2767C28.8762 19.1312 28.6842 18.9222 28.5008 18.7388C26.8518 16.97 22.5484 14.0757 20.2961 13.1913C19.9543 13.0526 19.0896 12.7491 18.6271 12.729C18.1846 12.729 17.7623 12.8295 17.3602 13.0305C16.8574 13.3119 16.4552 13.7541 16.234 14.2767C16.0933 14.6385 15.8721 15.7238 15.8721 15.7439C15.6509 16.9298 15.5302 18.8594 15.5302 20.99C15.5302 23.022 15.6509 24.8692 15.8318 26.0752C15.8368 26.0802 15.8541 26.1664 15.881 26.3004C15.9627 26.7078 16.1329 27.5564 16.3145 27.9042C16.7569 28.7484 17.6216 29.271 18.5466 29.271H18.6271C19.2303 29.2509 20.4972 28.7283 20.4972 28.7082C22.6288 27.8239 26.8317 25.0702 28.5209 23.2411L28.6415 23.1205Z" fill="white"/>
    </svg>
    <svg class="pause_btn" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="8.33337" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
      <rect x="29.1666" y="6.25" width="12.5" height="37.5" rx="2" fill="white"/>
    </svg>
  </div>