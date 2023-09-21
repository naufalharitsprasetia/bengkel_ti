@extends('template.main')

@section('contain')
    <div class="container-fluid px-5">
        <h2 class="text-center text-decoration-underline my-3">Category Controller</h2>
        <a class="btn btn-success my-4" href="/crud-category/create" role="button">Create Category</a>
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
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/crud-latihan/{{ $category->slug }}" class="badge bg-info "><i class="bi bi-eye"></i>
                                View</a>
                            <a href="" class="badge bg-warning "><i class="bi bi-pencil"></i> Edit</a>
                            <form action="" method="post" class="d-inline">
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
