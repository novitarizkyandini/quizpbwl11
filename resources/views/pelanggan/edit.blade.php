@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <form class="mt-4" action="" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="id_gol" class="form-label">Golongan*</label>
              <select class="form-control @error('id_gol') is-invalid @enderror" name="id_gol" id="id_gol">
                <option value="">-- Pilih --</option>
                @foreach($golongans as $golongan)
                <option value="{{ $golongan->id }}" {{ $pelanggan->id_gol == $golongan->id ? 'selected' : ''}}>{{ $golongan->status }}</option>
                @endforeach
              </select>
              @error('id_gol')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="no_kamar" class="form-label">No kamar*</label>
              <input type="text" class="form-control @error('no_kamar') is-invalid @enderror" name="no_kamar" id="no_kamar" value="{{ $pelanggan->no_kamar }}" placeholder="no kamar">
              @error('no_kamar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="nama" class="form-label">Nama*</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ $pelanggan->nama }}" placeholder="Nama">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="no_hp" class="form-label">No HP*</label>
              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ $pelanggan->no_hp }}" placeholder="No HP">
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
           
            <div class="form-group mb-3">
              <label for="status" class="form-label">Status*</label>
              <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                <option value="Aktif" {{ $pelanggan->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                <option value="Tidak Aktif" {{ $pelanggan->status == 'Tidak Aktif' ? 'selected' : ''}}>Tidak Aktif</option>
              </select>
              @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <button class="btn btn-success float-end" type="submit">Edit</button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
