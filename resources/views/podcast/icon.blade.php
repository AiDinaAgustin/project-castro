<div class="flex justify-between items-center flex-wrap text-2xl text-white font-bold my-10 mx-16">
  @auth
      @if (Auth::user()->likesPodcast($podcast))
          <div>
              <form action="{{ route('podcast.unlike', $podcast->slug) }}" method="POST">
                  @csrf
                  <button type="submit" class="flex flex-col items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                          class="w-10 h-10">
                          <path
                              d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                      </svg>
                      <p class="mt-3">Like</p>
                  </button>
              </form>
          </div>
      @else
          <div>
              <form action="{{ route('podcast.like', $podcast->slug) }}" method="POST">
                  @csrf
                  <button type="submit" class="flex flex-col items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="w-10 h-10">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>
                      <p class="mt-3">Like</p>
                  </button>
              </form>
          </div>
      @endif
  @endauth
  @guest
      <div>
          <a href="{{ route('login') }}">
              <button type="submit" class="flex flex-col items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                  <p class="mt-3">Like</p>
              </button>
          </a>
      </div>
  @endguest
  <div class="flex flex-col items-center">
    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9794 4.16646H34.0419C41.1044 4.16646 45.8335 9.12479 45.8335 16.4998V33.5227C45.8335 40.8748 41.1044 45.8331 34.0419 45.8331H15.9794C8.91687 45.8331 4.16687 40.8748 4.16687 33.5227V16.4998C4.16687 9.12479 8.91687 4.16646 15.9794 4.16646ZM23.8127 31.229L33.7085 21.3331C34.4169 20.6248 34.4169 19.479 33.7085 18.7498C33.0002 18.0415 31.8335 18.0415 31.1252 18.7498L22.521 27.354L18.8752 23.7081C18.1669 22.9998 17.0002 22.9998 16.2919 23.7081C15.5835 24.4165 15.5835 25.5623 16.2919 26.2915L21.2502 31.229C21.6044 31.5831 22.0627 31.7498 22.521 31.7498C23.0002 31.7498 23.4585 31.5831 23.8127 31.229Z" fill="white"/>
    </svg>
    <p>Selesai</p>
  </div>
  <button class="block text-white font-medium rounded-lg text-xl px-4 py-4"
      type="button" data-modal-toggle="authentication-modal">
      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2713 4.16687H34.7088C41.7921 4.16687 45.8338 8.16687 45.8338 15.271V34.7294C45.8338 41.7919 41.813 45.8335 34.7296 45.8335H15.2713C8.16711 45.8335 4.16711 41.7919 4.16711 34.7294V15.271C4.16711 8.16687 8.16711 4.16687 15.2713 4.16687ZM26.7088 26.7294H32.6255C33.5838 26.7085 34.3546 25.9377 34.3546 24.9794C34.3546 24.021 33.5838 23.2502 32.6255 23.2502H26.7088V17.3752C26.7088 16.4169 25.9379 15.646 24.9796 15.646C24.0213 15.646 23.2504 16.4169 23.2504 17.3752V23.2502H17.3546C16.8963 23.2502 16.4588 23.4377 16.1254 23.7502C15.8129 24.0835 15.6254 24.519 15.6254 24.9794C15.6254 25.9377 16.3963 26.7085 17.3546 26.7294H23.2504V32.6252C23.2504 33.5835 24.0213 34.3544 24.9796 34.3544C25.9379 34.3544 26.7088 33.5835 26.7088 32.6252V26.7294Z" fill="white"/>
      </svg>  
      <p class="mt-3 font-bold">Add to</p>
  </button>

  <!-- Main modal -->
  <!-- ... (sebelumnya) ... -->

<!-- Main modal -->
<div id="authentication-modal" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
  <div class="relative w-full max-w-md px-4 h-full md:h-auto">
      <!-- Modal content -->
      <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
          <div class="flex justify-end p-2">
              <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                  data-modal-toggle="authentication-modal">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
              </button>
          </div>
          <form id="playlistForm" class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="post" action="/podcastplaylist">
            @csrf
            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Playlist</h3>
        
            <div>
              
              <input type="hidden" name="podcast_id" id="podcast_id" value="{{ $podcast->id }}">
                <label for="playlistSelect" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Select Playlist</label>
                <select id="playlistSelect" name="playlist_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <!-- Tampilkan daftar playlist di sini -->
                    @foreach($playlists as $playlist)
                        <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <button type="submit" id="savePlaylistBtn" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="submitForm()">Save</button>
        </form>
      </div>
  </div>
</div>

<!-- ... (setelahnya) ... -->

  <div class="flex flex-col items-center">
    <button data-modal-toggle="default-modal" class="items-center">
      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M44.657 5.37913C43.6149 4.30958 42.0726 3.91112 40.6345 4.33055L7.09995 14.0823C5.58266 14.5039 4.50722 15.7139 4.21752 17.2511C3.92157 18.8156 4.95532 20.8016 6.30588 21.6321L16.7914 28.0767C17.8669 28.7373 19.2549 28.5716 20.1449 27.674L32.1519 15.5923C32.7563 14.9631 33.7567 14.9631 34.3611 15.5923C34.9655 16.2005 34.9655 17.1861 34.3611 17.8153L22.3333 29.8991C21.4412 30.7946 21.2745 32.1892 21.931 33.2713L28.3378 43.862C29.0881 45.1203 30.3803 45.8333 31.7976 45.8333C31.9643 45.8333 32.1519 45.8333 32.3186 45.8124C33.9443 45.6026 35.2365 44.4911 35.7158 42.9183L45.6574 9.42665C46.0951 8.00058 45.6991 6.44868 44.657 5.37913Z" fill="white"/>
      </svg>                
      <p class="text-center">Bagikan</p>
    </button>
   
    <!-- Modal toggle -->
    {{-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600" type="button" data-modal-toggle="default-modal">
      Toggle modal
      </button> --}}
  
      <!-- Main modal -->
      <div id="default-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center mx-4 p-4">
          <div class="relative w-full max-w-2xl px-4 mx-4 p-4 h-full md:h-auto">
              <!-- Modal content -->
              <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                          Share this via link
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="my-4">
                    <p class="text-sm">Share this link via</p>
          
                    <div class="flex justify-around my-4">
                      <!--FACEBOOK ICON-->
                      <div
                        class="border hover:bg-[#1877f2] w-12 h-12 fill-[#1877f2] hover:fill-white border-blue-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-blue-500/50 cursor-pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"
                          ></path>
                        </svg>
                      </div>
                      <!--TWITTER ICON-->
                      <div
                        class="border hover:bg-[#1d9bf0] w-12 h-12 fill-[#1d9bf0] hover:fill-white border-blue-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                          ></path>
                        </svg>
                      </div>
                      <!--INSTAGRAM ICON-->
                      <div
                        class="border hover:bg-[#bc2a8d] w-12 h-12 fill-[#bc2a8d] hover:fill-white border-pink-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-pink-500/50 cursor-pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"
                          ></path>
                          <circle cx="16.806" cy="7.207" r="1.078"></circle>
                          <path
                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                          ></path>
                        </svg>
                      </div>
          
                      <!--WHATSAPP ICON-->
                      <div
                        class="border hover:bg-[#25D366] w-12 h-12 fill-[#25D366] hover:fill-white border-green-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-green-500/50 cursor-pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"
                          ></path>
                        </svg>
                      </div>
          
                      <!--TELEGRAM ICON-->
                      <div
                        class="border hover:bg-[#229ED9] w-12 h-12 fill-[#229ED9] hover:fill-white border-sky-200 rounded-full flex items-center justify-center shadow-xl hover:shadow-sky-500/50 cursor-pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"
                          ></path>
                        </svg>
                      </div>
                    </div>
          
                    <p class="text-sm">Or copy link</p>
                    <!--BOX LINK-->
                    <div class="border-2 border-gray-200 flex justify-between items-center mt-4 py-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-gray-500 ml-2"
                      >
                        <path
                          d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"
                        ></path>
                        <path
                          d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"
                        ></path>
                      </svg>
          
                      <input class="w-full outline-none bg-transparent" type="text" placeholder="link" value="https://boxicons.com/?query=link">
          
                      <button class="bg-indigo-500 text-white rounded text-sm py-2 px-5 mr-2 hover:bg-indigo-600">
                          Copy
                      </button>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  {{-- <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-toggle="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                  </div> --}}
              </div>
          </div>
      </div>
    
  
  <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
  </div>
  
</div>

{{-- <script>
  document.addEventListener('DOMContentLoaded', function () {
      var currentPodcastId = "{{ $currentPodcast->id }}";
      document.getElementById('podcast_id').value = currentPodcastId;
  });
</script> --}}
<!-- JavaScript untuk menangani pengiriman formulir -->
<script>
  function submitForm() {
    // Dapatkan data dari formulir modal
    var playlistId = document.getElementById('playlistSelect').value;

    // Kirim request AJAX ke backend
    axios.post('/store-podcast-to-playlist', {
      playlist_id: playlistId,
      podcast_id: "{{ $podcast->id }}" // Sesuaikan dengan cara mendapatkan ID podcast yang sesuai
    })
    .then(function (response) {
      // Tanggapan dari backend, Anda dapat menanggapi sesuai kebutuhan
      console.log(response.data);
      // Tutup modal atau lakukan tindakan lain jika diperlukan
      closeModal();
    })
    .catch(function (error) {
      // Tanggapan error dari backend, Anda dapat menanggapi sesuai kebutuhan
      console.error(error);
    });
  }

  function closeModal() {
    // Code untuk menutup modal, sesuaikan sesuai kebutuhan
    document.getElementById('authentication-modal').classList.add('hidden');
  }
</script>

  
  
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>