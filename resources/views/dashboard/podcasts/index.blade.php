@extends('dashboard.layouts.main')

@section('content')

<div class="mb-4 w-full">
    <table class="table-auto border-separate border-spacing-y-2 w-full">
      <thead class="text-xl text-white font-bold">
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Author</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white text-center">
          <td>1</td>
          <td>Misteri Malam</td>
          <td>Alexandra</td>
          <td>Mysteri</td>
          <td>
            <ul class="flex items-center justify-center gap-3">
              <li class="w-8 h-8 bg-green-700 rounded-md flex items-center justify-center">
                <img src="../assets/img/Edit.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                <img src="../assets/img/Show.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center">
                <img src="../assets/img/Delete.png" alt="" width="50px">
              </li>
            </ul>
          </td>
        </tr>
        <tr class="bg-white text-center">
          <td>2</td>
          <td>Misteri Malam</td>
          <td>Alexandra</td>
          <td>Mysteri</td>
          <td>
            <ul class="flex items-center justify-center gap-3">
              <li class="w-8 h-8 bg-green-700 rounded-md flex items-center justify-center">
                <img src="../assets/img/Edit.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                <img src="../assets/img/Show.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center">
                <img src="../assets/img/Delete.png" alt="" width="50px">
              </li>
            </ul>
          </td>
        </tr>
        <tr class="bg-white text-center">
          <td>3</td>
          <td>Misteri Malam</td>
          <td>Alexandra</td>
          <td>Mysteri</td>
          <td>
            <ul class="flex items-center justify-center gap-3">
              <li class="w-8 h-8 bg-green-700 rounded-md flex items-center justify-center">
                <img src="../assets/img/Edit.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                <img src="../assets/img/Show.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center">
                <img src="../assets/img/Delete.png" alt="" width="50px">
              </li>
            </ul>
          </td>
        </tr>
        <tr class="bg-white text-center">
          <td>4</td>
          <td>Misteri Malam</td>
          <td>Alexandra</td>
          <td>Mysteri</td>
          <td>
            <ul class="flex items-center justify-center gap-3">
              <li class="w-8 h-8 bg-green-700 rounded-md flex items-center justify-center">
                <img src="../assets/img/Edit.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                <img src="../assets/img/Show.png" alt="" width="50px">
              </li>
              <li class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center">
                <img src="../assets/img/Delete.png" alt="" width="50px">
              </li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="table-responsive small col-lg-10">
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
                    <a href="/dashboard/podcasts/{{ $podcast->id }}" class="badge bg-info">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="2" />  <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />  <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" /></svg>                                                
                    </a>
                    <a href="/dashboard/podcasts/{{ $podcast->slug }}/edit" class="badge bg-warning">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />  <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                    </a>
                    <a href="/dashboard/podcasts/{{ $podcast->slug }}/edit" class="badge bg-danger">
                        <svg class="h-4 w-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" />  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                    </a>
                    
                </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
  </div>

@endsection