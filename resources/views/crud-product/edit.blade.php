@extends('template.main')

@section('contain')
    <div class="container-fluid px-5 mt-3">
        <hr>
        <h1 class="mt-4">Edit Product</h1>
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <div class="col-lg-10">
            <form method="post" action="/crud-product/{{ $product->slug }}" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Product</label>
                    <input type="text"
                        class="form-control @error('nama_produk')
                    is-invalid
                @enderror"
                        id="nama_produk" name="nama_produk"
                        onkeyup="document.getElementById('autoslug').value = this.value.replace(/\s+/g, '-').toLowerCase()"
                        required value="{{ old('nama_produk', $product->nama_produk) }}">
                    @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text"
                        class="form-control @error('slug')
                    is-invalid
                @enderror"
                        name="slug" id="autoslug" readonly required value="{{ old('slug', $product->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $product->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <label for="price" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="text" class="form-control @error('price')  is-invalid  @enderror" required
                        value="{{ old('price', $product->price) }}" name="price">
                    <span class="input-group-text">,-</span>
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="diskon" class="form-label">Diskon</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('diskon')  is-invalid  @enderror" required
                        value="{{ old('diskon', $product->diskon) }}" name="diskon">
                    <span class="input-group-text">%</span>
                    @error('diskon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tambahkan Deskripsi" id="floatingTextarea2" style="height: 100px"
                        name="desc">{{ old('desc', $product->desc) }}</textarea>
                    <label for="floatingTextarea2">Deskripsi</label>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label>
                    <input type="hidden" name="oldImage" value="{{ $product->image }}">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">
                    @else
                        <img class="img-preview img-fluid mb-3 col  -sm-5" alt="">
                    @endif
                    <input class="form-control @error('image')
                    is-invalid
                @enderror"
                        type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');
                imgPreview.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endsection
