@extends('layouts.master')

@section('title')
    Detail Customer
@endsection

@section('content')
    <h1>{{$customer->nama}}</h1>
    <p>{{$customer->alamat}}</p>
    <p>{{$customer->telepon}}</p>

    <a href="/customer" class="btn btn-sm btn-secondary">Kembali</a>
@endsection