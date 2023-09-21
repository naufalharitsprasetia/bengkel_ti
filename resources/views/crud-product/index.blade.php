@extends('template.main')

@section('contain')
    <div class="container-fluid px-5">
        <h2 class="text-center text-decoration-underline my-3">Product Controller</h2>
        <a class="btn btn-success my-4" href="/crud-product/create" role="button">Create Product</a>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped px-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="/crud-product/{{ $product->slug }}" class="badge bg-info "><i class="bi bi-eye"></i>
                                View</a>
                            <a href="/crud-product/{{ $product->slug }}/edit" class="badge bg-warning "><i
                                    class="bi bi-pencil"></i> Edit</a>
                            <form action="/crud-product/{{ $product->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><i
                                        class="bi bi-x-circle"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
