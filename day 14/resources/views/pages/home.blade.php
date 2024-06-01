@extends('layouts.master')
@section('title')
Halaman Home
@endsection
@section('content')
    <h1>Selamat datang "{{ $fname }}" anda memiliki hobi yang hebat dengan "{{ $name }}" maka hidup akan menjadi terasa lebih baik</h1><br>
    <a href='/register'>kembali</a>
@endsection