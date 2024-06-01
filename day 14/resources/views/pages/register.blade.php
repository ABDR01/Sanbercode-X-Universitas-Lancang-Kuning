@extends('layouts.master')
@section('title')
Halaman Biodata
@endsection
@section('content')

    <form action="/welcome" method="POST">
        @csrf
        <label for="">Nama Kamu:</label> <br>
        <input type="text" name="fname"> <br> <br>
        <label for="">Hobi:</label> <br>
        <input type="text" name="name"> <br> <br>
        <button type="submit">Kirim</button>  
    </form><br>
<a href='/'>kembali</a>
    @endsection