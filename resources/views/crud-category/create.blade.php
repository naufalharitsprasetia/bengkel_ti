@extends('template.main')

@section('contain')
    <div class="container-fluid px-5 mt-3">
        <hr>
        <h1 class="mt-4">Create Category</h1>
        <br>
        <form method="post" enctype="" action="/crud-category">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('name')
                is-invalid
                @enderror"
                    id="name" name="name" placeholder="Category"
                    onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="slug" class="form-label mt-4">Slug (Otomatis)</label>
                <input type="text"
                    class="form-control @error('slug')
                is-invalid
                @enderror" id="autoslug"
                    name="slug" placeholder="Slug" readonly value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection
