@extends('layouts.master')
@section('title')
Halaman Tambah
@endsection
@section('content')

<form method="POST" action="/Cast/{{$Cast->id}}">
    {{--validation--}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{--Form Input--}}
    @csrf
    @method("put")
    <div class="form-group">
      <label >Cast Name</label>
      <input type="text" value="{{$Cast->name}}" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label >Umur</label>
        <input type="text" value="{{$Cast->umur}}" class="form-control" name="umur">
      </div>
      <div class="form-group">
        <label >Bio</label>
        <input type="text" value="{{$Cast->bio}}" class="form-control" name="bio">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    @endsection