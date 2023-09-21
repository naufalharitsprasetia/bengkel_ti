@extends('template.main')

@section('contain')
    <div class="container-fluid px-5 mt-3">
        <hr>
        <h1 class="mt-4">Create Category</h1>
        <br>
        <form method="post" enctype="" action="/crud-servis">
            @csrf
            @method('post')
            {{-- Nama pelanggan --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control @error('nama')
                is-invalid
                @enderror"
                    id="nama" name="nama" placeholder="Nama Pelanggan" value="{{ old('nama') }}">
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
                    id="jenis_barang" name="jenis_barang" placeholder="Jenis Barang" value="{{ old('jenis_barang') }}">
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
                    id="jenis_servis" name="jenis_servis" placeholder="Jenis Barang" value="{{ old('jenis_servis') }}">
                @error('jenis_servis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="hidden" name="status" value="0">
            <input type="hidden" name="tanggal_servis" value="{{ now() }}">
            <br>
            <button type="submit" class="btn btn-primary">Create Servis</button>
        </form>
    </div>
@endsection
