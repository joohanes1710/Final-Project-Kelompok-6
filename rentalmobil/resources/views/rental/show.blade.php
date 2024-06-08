@extends('layouts.master')

@section('title')
    Detail Rental
@endsection

@section('content')
    <h1>{{$rental->peminjaman}}</h1>
    <p>{{$rental->pengembalian}}</p>

    <a href="/rental" class="btn btn-sm btn-secondary">Kembali</a>
@endsection