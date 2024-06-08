@extends('layouts.master')

@section('title')
    Detail Payment
@endsection

@section('content')
    <h1>{{$payment->total}}</h1>
    <p>{{$payment->pembayaran}}</p>

    <a href="/payment" class="btn btn-sm btn-secondary">Kembali</a>
@endsection