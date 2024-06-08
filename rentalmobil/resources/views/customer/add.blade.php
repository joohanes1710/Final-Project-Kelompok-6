@extends('layouts.master')

@section('title')
    Add Customer
@endsection

@section('content')
<form action="/customer" method="POST">

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
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="number" class="form-control" name="telepon">
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
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection