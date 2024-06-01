@extends('layouts.master')

@section('title')
    Halaman Tampil Kategori
    
@endsection

@section('content')

<a href="Cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">umur</th>
        <th scope="col">action</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($Cast as $key => $item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->umur}}</td>
            <td>
                
                <form action="/Cast/{{$item->id}}" method="POST">
                    <a href="/Cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/Cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger btn-sm" value='DELETE'>
                </form>
            </td>
          </tr>

        @empty
            Cast Belum Ada
        @endforelse
      
      
    </tbody>
  </table>

@endsection
