@extends('layouts.master')

@section('title')
    Edit Customer
@endsection

@section('content')
<form action="/customer/{{$customer->id}}" method="POST">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $customer->nama}}">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" value="{{ $customer->alamat}}">
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="number" class="form-control" name="telepon" value="{{ $customer->telepon}}">
      </div>
      <label>User Customer:</label>
        <select name="user_id" class="form-control" id="">
            <option value="">--Pilih User--</option>
            @forelse ($user as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
            @empty
                <option value="">Tidak ada User Customer</option>
            @endforelse
        </select>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection