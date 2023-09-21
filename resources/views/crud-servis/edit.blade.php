@extends('template.main')

@section('contain')
    <div class="container-fluid px-5 mt-3">
        <hr>
        <h1 class="mt-4">Edit Category</h1>
        <br>
        <form method="post" enctype="" action="/crud-servis/{{ $servis->id }}">
            @csrf
            @method('put')
            {{-- Nama pelanggan --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control @error('nama')
                is-invalid
                @enderror"
                    id="nama" name="nama" placeholder="Nama Pelanggan" value="{{ old('nama', $servis->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Jenis Barang --}}
            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <input type="text"
                    class="form-control @error('jenis_barang')
                is-invalid
                @enderror"
                    id="jenis_barang" name="jenis_barang" placeholder="Jenis Barang"
                    value="{{ old('jenis_barang', $servis->jenis_barang) }}">
                @error('jenis_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Jenis Servis --}}
            <div class="mb-3">
                <label for="jenis_servis" class="form-label">Jenis Servis</label>
                <input type="text"
                    class="form-control @error('jenis_servis')
                is-invalid
                @enderror"
                    id="jenis_servis" name="jenis_servis" placeholder="Jenis Barang"
                    value="{{ old('jenis_servis', $servis->jenis_servis) }}">
                @error('jenis_servis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- RADIO --}}
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault"
                    @if (old('status', $servis->status) == 0) {{ 'checked' }} @endif>
                <label class="form-check-label  btn btn-warning" for="flexRadioDefault">
                    Sedang Dikerjakan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1"
                    @if (old('status', $servis->status) == 1) {{ 'checked' }} @endif>
                <label class="form-check-label  btn btn-success" for="flexRadioDefault1">
                    Selesai
                </label>
            </div>
            <input type="hidden" name="tanggal_servis" value="{{ old('tanggal_servis', $servis->tanggal_servis) }}">
            <br>
            <button type="submit" class="btn btn-primary">Update Servis</button>
        </form>
    </div>
@endsection
