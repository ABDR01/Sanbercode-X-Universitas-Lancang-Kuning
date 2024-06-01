@extends('layouts.master')

@section('title')
    Halaman Detail Kategori
    
@endsection

@section('content')

<h6>{{$Cast->name}}</h6>
<h6>{{$Cast->umur}}</h6>
<p>{{$Cast->bio}}</p>
<a href='/Cast'>Kembali</a>


@endsection