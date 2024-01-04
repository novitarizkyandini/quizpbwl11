@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <div class="col-sm-6">
        <form class="row g-3 mt-2" action="" method="POST">
          @csrf

          <div class="form-group">
            <label for="pay" class="form-label">Pay*</label>
            <input type="text" class="form-control @error('pay') is-invalid @enderror" name="pay" id="pay" placeholder="pay">
            @error('pay')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="status" class="form-label">Status*</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="status">
            @error('status')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <button class="btn btn-success float-end" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
