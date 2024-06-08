@extends('layouts.master')

@section('title')
    Rental
@endsection

@section('content')
<a href="/rental/create" class="btn btn-sm btn-primary">Add Rental</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Peminjaman</th>
        <th scope="col">Pengembalian</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($rental as $key=>$item)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->peminjaman}}</td>
        <td>{{$item->pengembalian}}</td>
        <td>{{$item->car->merek}}</td>
        <td>{{$item->customer->nama}}</td>

        <td>

            <form action="/rental/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <a href="/rental/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/rental/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form>
        </td>
      </tr>         
        @empty
        <tr>
            <th>Tidak Ada Rental</th>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection