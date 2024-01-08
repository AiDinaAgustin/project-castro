@extends('dashboard.layouts.main')

@section('content')

<div class="col-lg-6">
    <form method="post" action="/dashboard/podcasts">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label text-white">Title</label>
          <input type="text" class="form-control" id="title" name="title" autofocus>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label text-white">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label text-white">Category</label>
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
</script>

@endsection