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
      <div id="default-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
          <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
              <!-- Modal content -->
              <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                          Terms of Service
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                      <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                          With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                      </p>
                      <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                          The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-toggle="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
                  </div>
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