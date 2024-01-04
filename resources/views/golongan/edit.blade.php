@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <div class="col-sm-6">
        <form class="row g-3 mt-4" action="" method="POST">
          @method('PUT')
          @csrf

          <div class="form-group">
            <label for="pay" class="form-label">Pay*</label>
            <input type="text" class="form-control @error('pay') is-invalid @enderror" name="pay" id="pay" value="{{ $golongan->pay }}" placeholder="Pay">
            @error('pay')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="status" class="form-label">Status*</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" value="{{ $golongan->status }}" placeholder="Status">
            @error('status')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          <div class="form-group">
            <button class="btn btn-success float-end" type="submit">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
