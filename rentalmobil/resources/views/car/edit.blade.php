@extends('layouts.master')

@section('title')
    Edit Car
@endsection

@section('content')
<form action="/car/{{$car->id}}" method="POST">

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
      <label>Merek</label>
      <input type="text" class="form-control" name="merek" value="{{ $car->merek}}">
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" name="type" value="{{ $car->type}}">
      </div>
      <div class="form-group">
        <label>Tahun</label>
        <input type="number" class="form-control" name="tahun" value="{{ $car->tahun}}">
      </div>
      <div class="form-group">
        <label>Status</label>
        <textarea name="status" id="" cols="30" rows="10" class="form-control">{{ $car->status}}</textarea>
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="decimal" class="form-control" name="price" value="{{ $car->price}}">
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection