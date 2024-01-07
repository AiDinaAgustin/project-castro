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
                <td>placeholder</td>
                <td>text</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
  </div>

@endsection