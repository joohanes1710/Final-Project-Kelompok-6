@extends('layouts.master')

@section('title')
    Edit Rental
@endsection

@section('content')
<form action="/rental/{{$rental->id}}" method="POST">

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
      <label>Peminjaman</label>
      <input type="date" class="form-control" name="peminjaman" value="{{ $rental->peminjaman}}">
    </div>
    <div class="form-group">
        <label>Pengembalian</label>
        <input type="date" class="form-control" name="pengembalian" value="{{ $rental->pengembalian}}">
      </div>     
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection