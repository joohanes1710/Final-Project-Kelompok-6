@extends('layouts.master')

@section('title')
    Add Rental
@endsection

@section('content')
<form action="/rental" method="POST">

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
      <label>Peminjaman</label>
      <input type="date" class="form-control" name="peminjaman">
    </div>
    <div class="form-group">
        <label>Pengemballian</label>
        <input type="date" class="form-control" name="pengembalian">
      </div>
<label>Customer Rental:</label>
        <select name="customer_id" class="form-control" id="">
            <option value="">--Pilih Customer--</option>
            @forelse ($customer as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
            @empty
                <option value="">Tidak ada Costomer Rental</option>
            @endforelse
        </select>
<label>Car Rental:</label>
        <select name="car_id" class="form-control" id="">
            <option value="">--Pilih Car--</option>
            @forelse ($car as $item)
                <option value="{{$item->id}}">{{$item->merek}}</option>
            @empty
                <option value="">Tidak ada Car Rental</option>
            @endforelse
        </select>        
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection