@extends('layouts.master')

@section('title')
    Add Car
@endsection

@section('content')
<form action="/car" method="POST">

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
      <label>Merek</label>
      <input type="text" class="form-control" name="merek">
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" name="type">
      </div>
      <div class="form-group">
        <label>Tahun</label>
        <input type="number" class="form-control" name="tahun">
      </div>
      <div class="form-group">
        <label>Status</label>
        <textarea name="status" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="number" class="form-control" name="price">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection