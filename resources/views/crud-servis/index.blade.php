@extends('template.main')

@section('contain')
    <div class="container-fluid px-5">
        <h2 class="text-center text-decoration-underline my-3">Servis Controller</h2>
        <a class="btn btn-success my-4" href="/crud-servis/create" role="button">Create Servis</a>
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
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Jenis Servis</th>
                    <th scope="col">Waktu Servis</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $servis)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $servis->nama }}</td>
                        <td>{{ $servis->jenis_barang }}</td>
                        <td>{{ $servis->jenis_servis }}</td>
                        <td>{{ $servis->tanggal_servis }}</td>
                        @if ($servis->status === 0)
                            <td><span class="btn btn-warning">Sedang Dikerjakan</span></td>
                        @else
                            <td><span class="btn btn-success">Selesai</span></td>
                        @endif
                        <td>
                            <a href="/crud-servis/{{ $servis->id }}" class="badge bg-info "><i class="bi bi-eye"></i>
                                View</a>
                            <a href="/crud-servis/{{ $servis->id }}/edit" class="badge bg-warning "><i
                                    class="bi bi-pencil"></i> Edit</a>
                            <form action="/crud-servis/{{ $servis->id }}" method="post" class="d-inline">
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
