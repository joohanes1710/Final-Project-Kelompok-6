@extends('layouts.master')

@section('title')
    Customer
@endsection

@section('content')
<a href="/customer/create" class="btn btn-sm btn-primary">Add Customer</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Telepon</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($customer as $key=>$item)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->telepon}}</td>
        <td>

            <form action="/customer/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <a href="/customer/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/customer/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form>
        </td>
      </tr>         
        @empty
        <tr>
            <th>Tidak Ada Customer</th>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection