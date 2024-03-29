@extends('layouts.main')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success bg-yellow-300 px-2 rounded-lg col-lg-12 text-white" role="alert">
{{ session('success') }}
</div>
@endif

<header class="sticky top-0 bg-zinc-900 z-50 flex items-center justify-between mb-4 py-2">
    <div class="button-nav flex">
      <div class="btn-undo mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z"/></svg>
      </div>
      <div class="btn-redo mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="#F9D80F"><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/></svg>
      </div>
    </div>
  </header>

  
<main class="w-full flex flex-col items-center gap-3 min-h-screen overflow-x-hidden">
  
    <!-- Main content -->
    @if ($user->image)
        <div style="width: 250px; height: 250px; overflow: hidden; border-radius: 50%;">
          <img src="{{ asset('storage/' . $user->image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    @else
        <div style="width: 250px; height: 250px; overflow: hidden; border-radius: 50%;">
          <img src="/assets/img/Ellipse 46.png" alt="" style="width: 100%; height: 100%; object-fit: cover;">
        </div>        
    @endif
    
    
    <h3 class="text-2xl text-white font-bold">{{ $user->name }}</h3>
    <p class="text-xl text-white font-bold">&commat;{{ $user->username }}</p>
    <div>
      <ul class="flex items-center gap-5 text-xl text-white font-bold">
        <li>{{ $user->followers()->count() }} Followers</li>
        <li>{{ $user->followings()->count() }} Following</li>
      </ul>
    </div>
    {{-- <div class="w-46 bg-yellow-400 flex items-center gap-2 py-4 px-4 md:px-16 rounded-lg mb-4">
    <button>
        <a href="/profile/{{ $user->id }}/edit">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.3764 20.0279L18.1628 8.66544C18.6403 8.0527 18.8101 7.3443 18.6509 6.62299C18.513 5.96726 18.1097 5.34377 17.5049 4.87078L16.0299 3.69906C14.7459 2.67784 13.1541 2.78534 12.2415 3.95706L11.2546 5.23735C11.1273 5.39752 11.1591 5.63401 11.3183 5.76301C11.3183 5.76301 13.812 7.76246 13.8651 7.80546C14.0349 7.96671 14.1622 8.1817 14.1941 8.43969C14.2471 8.94493 13.8969 9.41792 13.377 9.48242C13.1329 9.51467 12.8994 9.43942 12.7297 9.29967L10.1086 7.21422C9.98126 7.11855 9.79025 7.13898 9.68413 7.26797L3.45514 15.3303C3.0519 15.8355 2.91395 16.4912 3.0519 17.1255L3.84777 20.5761C3.89021 20.7589 4.04939 20.8879 4.24039 20.8879L7.74222 20.8449C8.37891 20.8341 8.97316 20.5439 9.3764 20.0279ZM14.2797 18.9533H19.9898C20.5469 18.9533 21 19.4123 21 19.9766C21 20.5421 20.5469 21 19.9898 21H14.2797C13.7226 21 13.2695 20.5421 13.2695 19.9766C13.2695 19.4123 13.7226 18.9533 14.2797 18.9533Z" fill="white"/>
      </svg>
      <p class="text-2xl text-white font-bold">Ubah Profile</p>
    </a>
    </button>
    </div> --}}
    <!-- Modal toggle -->
    <button class="block flex text-2xl text-white font-bold bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-500 rounded-lg px-5 py-3 text-center" type="button" data-modal-toggle="default-modal">
      
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.3764 20.0279L18.1628 8.66544C18.6403 8.0527 18.8101 7.3443 18.6509 6.62299C18.513 5.96726 18.1097 5.34377 17.5049 4.87078L16.0299 3.69906C14.7459 2.67784 13.1541 2.78534 12.2415 3.95706L11.2546 5.23735C11.1273 5.39752 11.1591 5.63401 11.3183 5.76301C11.3183 5.76301 13.812 7.76246 13.8651 7.80546C14.0349 7.96671 14.1622 8.1817 14.1941 8.43969C14.2471 8.94493 13.8969 9.41792 13.377 9.48242C13.1329 9.51467 12.8994 9.43942 12.7297 9.29967L10.1086 7.21422C9.98126 7.11855 9.79025 7.13898 9.68413 7.26797L3.45514 15.3303C3.0519 15.8355 2.91395 16.4912 3.0519 17.1255L3.84777 20.5761C3.89021 20.7589 4.04939 20.8879 4.24039 20.8879L7.74222 20.8449C8.37891 20.8341 8.97316 20.5439 9.3764 20.0279ZM14.2797 18.9533H19.9898C20.5469 18.9533 21 19.4123 21 19.9766C21 20.5421 20.5469 21 19.9898 21H14.2797C13.7226 21 13.2695 20.5421 13.2695 19.9766C13.2695 19.4123 13.7226 18.9533 14.2797 18.9533Z" fill="white"/>
      </svg>
      <p class="ml-4">Ubah Profile</p>
      </button>
  
      <!-- Main modal -->
      <div id="default-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
          <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
              <!-- Modal content -->
              <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                          Update Profile
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6">
                <form class="w-full max-w-lg">
                    {{-- @method('put') --}}
                      @csrf
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Name
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('name') is-invalid @enderror" required id="name" type="text" name="name" value="{{ old('name', $user->name) }}">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Username
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="username" type="text" name="username" value="{{ old('username', $user->username) }}">
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            Email
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                            Password
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password" name="password" value="{{ old('password', $user->password) }}">
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="birth">
                            Birth
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="birth" type="date" name="birth" value="{{ old('birth', $user->birth) }}">
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
                            Gender
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender" name="gender">
                              {{-- <option value="gender">{{ $user->gender }}</option> --}}
                              @if($user->gender == 'MALE')
                                    <option value="FEMALE">Female</option>
                                    <option value="MALE" selected>Male</option>
                              @else
                                  <option value="MALE">Male</option>
                                  <option value="FEMALE" selected>Female</option>
                              @endif
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                            Image
                          </label>
                          <input type="hidden" name="oldImage" value="{{ $user->image }}">
                          {{-- <div class="w-full flex justify-center items-center">
                            <img id="img-preview" class="w-36 object-cover">
                          </div> --}}
                        {{-- <div class="flex items-center border-b border-gray-300 py-2"> --}}
                            <span class="sr-only">Choose File</span>
                            @if ($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}"id="img-preview" class="w-36 object-cover mb-2">
                            @else
                            <div class="w-full flex justify-center items-center">
                              <img id="img-preview" class="w-36 object-cover mb02">
                            </div>
                            @endif
                            <input onchange="previewImage()" type="file" id="image" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold" />
                            @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        {{-- </div> --}}
                        </div>
                      </div>
                      {{-- <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button> --}}
                    </form>
                  </div>
                  <!-- Modal footer -->
                  {{-- <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-toggle="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                      <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Cancel</button>
                  </div> --}}
              </div>
          </div>
    </div>
  
  <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

    <div class="w-full bg-zinc-700 flex items-center py-4 px-4 md:px-16 rounded-lg">
        <a href="/dashboard/podcasts" class="flex items-center"> <!-- Added class="flex items-center" here -->
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8277 28.5326H22.172C17.6656 28.5326 14.013 24.9238 14.013 20.4756V11.807C14.013 7.35699 17.6656 3.75 22.172 3.75H22.8277C27.334 3.75 30.9885 7.35699 30.9885 11.807V20.4756C30.9885 24.9238 27.334 28.5326 22.8277 28.5326ZM34.8048 20.2179C34.8048 19.226 35.6185 18.4242 36.6212 18.4242C37.6238 18.4242 38.4375 19.226 38.4375 20.2179C38.4375 28.2874 32.251 34.9508 24.3172 35.8458V39.4564C24.3172 40.4465 23.5035 41.25 22.5009 41.25C21.4965 41.25 20.6846 40.4465 20.6846 39.4564V35.8458C12.749 34.9508 6.5625 28.2874 6.5625 20.2179C6.5625 19.226 7.37622 18.4242 8.37884 18.4242C9.38146 18.4242 10.1952 19.226 10.1952 20.2179C10.1952 26.9171 15.7151 32.3679 22.5009 32.3679C29.2849 32.3679 34.8048 26.9171 34.8048 20.2179Z" fill="white"/>
            </svg>
            <p class="text-2xl text-white font-bold ml-2">Karyaku</p> <!-- Added margin-left (ml-2) here -->
        </a>
    </div>
  </main>
<script>
  function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('#img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
  }
</script>

@endsection
