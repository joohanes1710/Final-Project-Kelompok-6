@extends('layouts.master')

@section('title')
    Detail Car
@endsection

@section('content')
    <h1>{{$car->merk}}</h1>
    <p>{{$car->type}}</p>
    <p>{{$car->tahun}}</p>
    <p>{{$car->status}}</p>
    <p>{{$car->price}}</p>

    <a href="/car" class="btn btn-sm btn-secondary">Kembali</a>
@endsection