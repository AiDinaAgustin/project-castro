@extends('dashboard.layouts.main')

@section('content')

<div class="col-lg-12">
    <form method="post" action="/dashboard/podcasts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required value="{{ old('title') }}">
          <div class="invalid-feedback">
            @error('title')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if(old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Podcast Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-3">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="audio" class="form-label">Podcast Audio</label>
            <audio id="audioPlayer" controls style="display: none;" class="mb-2">
                Your browser does not support the audio element.
            </audio>
            <input class="form-control @error('audio') is-invalid @enderror" type="file" id="audio" name="audio" onchange="previewAudio()">
            @error('audio')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Body</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" class="" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary bg-primary">Create Podcast</button>
      </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/podcasts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

<script>
    function previewAudio() {
        // Mendapatkan elemen input file dan audio player
        var input = document.getElementById('audio');
        var audioPlayer = document.getElementById('audioPlayer');

        // Menyembunyikan audio player jika tidak ada file yang dipilih
        if (!input.files || input.files.length === 0) {
            audioPlayer.style.display = 'none';
            return;
        }

        // Menampilkan audio player dan mengatur sumber audio
        audioPlayer.style.display = 'block';
        var audioURL = URL.createObjectURL(input.files[0]);
        audioPlayer.src = audioURL;
    }
</script>


@endsection