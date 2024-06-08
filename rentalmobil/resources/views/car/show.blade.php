@extends('layouts.master')

@section('title')
    Detail Car
@endsection

@section('content')
    <h1>{{$car->nama}}</h1>
    <p>{{$car->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>
@endsection