@extends('layouts.master')

@section('title')
    Car
@endsection

@section('content')
<a href="/car/create" class="btn btn-sm btn-primary">Add Car</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Merek</th>
        <th scope="col">Type</th>
        <th scope="col">Tahun</th>
        <th scope="col">Status</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($car as $key=>$item)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->merek}}</td>
        <td>{{$item->type}}</td>
        <td>{{$item->tahun}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->price}}</td>
        <td>

            <form action="/car/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <a href="/car/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/car/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
            </form>
        </td>
      </tr>         
        @empty
        <tr>
            <th>Tidak Ada Car</th>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection