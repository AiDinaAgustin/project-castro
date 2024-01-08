@extends('dashboard.layouts.main')

@section('content')

<div class="mb-4 w-full ml-10">
  @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif
    <div class="table-responsive small col-lg-12">
        <a href="/dashboard/podcasts/create">
            <button type="button" class="btn btn-sm btn-primary bg-primary d-flex align-items-center gap-1 mb-2">
                <svg class="h-5 w-5 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg> 
                Create Podcast
            </button>
        </a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($podcasts as $podcast)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $podcast->title }}</td>
                <td>{{ $podcast->category->name }}</td>
                <td>{{ $podcast->created_at->format('d M, Y') }}</td>
                <td>
                    <button  class="badge bg-info">
                      <a href="/dashboard/podcasts/{{ $podcast->slug }}">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="2" />  <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />  <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" /></svg>                                                
                    </a>
                    </button>
                    
                    <button  class="badge bg-warning">
                      <a href="/dashboard/podcasts/{{ $podcast->slug }}/edit">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />  <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                    </a>
                    </button>
                    
                    <form action="/dashboard/podcasts" method="post" class="d-inline py-2">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger" onclick="return confirm('Are you sure? ')">
                          <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" />  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                      </button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
  </div>

@endsection