@extends('layouts.master')

@section('title')
    Add Payment
@endsection

@section('content')
<form action="/payment" method="POST">

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
      <label>Total</label>
      <input type="number" class="form-control" name="total">
    </div>
    <div class="form-group">
        <label>Pembayaran</label>
        <input type="date" class="form-control" name="pembayaran">
      </div>
<label>Rental Payment:</label>
        <select name="rental_id" class="form-control" id="">
            <option value="">--Pilih Rental--</option>
            @forelse ($rental as $item)
                <option value="{{$item->id}}">{{$item->peminjaman}}</option>
            @empty
                <option value="">Tidak ada Rental Payment</option>
            @endforelse
        </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection