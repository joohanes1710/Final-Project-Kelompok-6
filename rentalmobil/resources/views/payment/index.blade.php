@extends('layouts.master')

@section('title')
    Payment
@endsection

@section('content')
<a href="/payment/create" class="btn btn-sm btn-primary">Add Payment</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Total</th>
        <th scope="col">Pembayaran</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($payment as $key=>$item)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->Total}}</td>
        <td>{{$item->Pembayaran}}</td>
        <td>

            <form action="/payment/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <a href="/payment/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/payment/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form>
        </td>
      </tr>         
        @empty
        <tr>
            <th>Tidak Ada Payment</th>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection