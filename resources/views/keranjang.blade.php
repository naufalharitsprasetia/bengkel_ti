@extends('template.main')

@section('contain')
    <div class="container-fluid p-5">
        <h1>Halaman Keranjang</h1>
        <div class="cart bg-secondary-subtle d-flex flex-column m-5 rounded">
            <div class="product m-4 mx-5">
                <div class="row mx-3 px-5">
                    <h2 class="text-center">Keranjang Saya</h2>
                    @if (session()->has('success'))
                        <div class="alert alert-success col-lg-12 alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('success') }}
                        </div>
                    @endif
                    @php
                        $totalPembayaran = 0; // Inisialisasi total pembayaran
                    @endphp
                    @foreach ($pembelians as $pembelian)
                        <div class="col-12">
                            <div class="card mb-3 border-2 border-primary">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $pembelian->product->image) }}"
                                            class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $pembelian->product->nama_produk }}</h1>
                                                <hr>
                                                @php
                                                    // Menambahkan harga produk ke total pembayaran
                                                    $hargaDiskon = $pembelian->product->price - $pembelian->product->price * ($pembelian->product->diskon / 100);
                                                @endphp
                                                <h6 class="card-text">Rp.{{ $hargaDiskon }},-</h6>
                                                @php
                                                    // Menambahkan harga produk ke total pembayaran
                                                    $totalPembayaran += $hargaDiskon;
                                                @endphp
                                                <p class="card-text">{{ $pembelian->product->desc }}</p>
                                                <form id="deleteForm" action="/delete-keranjang/{{ $pembelian->id }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    {{-- BELUM SELESAI, ketika success return nilai, kasih pengkondisian, jika benar kasih button submit --}}
                                                    <button type="button" onclick="showSweetAlert()"
                                                        class="btn btn-primary my-1 float-end">Hapus</button>
                                                </form>

                                                {{-- script sweet alert --}}
                                                <script>
                                                    function showSweetAlert() {
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Di sini, Anda dapat mengirimkan formulir secara manual setelah konfirmasi
                                                                document.getElementById('deleteForm').submit();
                                                            }
                                                        });
                                                    }
                                                </script>
                                                {{-- script sweet alert --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pay bg-secondary-subtle d-flex flex-column m-5 rounded">
            <div class="payment m-4">
                <h2 class="text-decoration-underline">Payment</h2>
                <h3>Total Pembayaran = <span class="btn btn-primary">Rp.{{ $totalPembayaran }},-</span></h3>
                <h4>UNTUK Pembelian Lebih Lanjut Hubungi :
                    <div class="btn btn-lg btn-success">
                        <i class="fa-brands fa-whatsapp"></i> +62 812-3423-8282
                    </div>
                </h4>
            </div>
        </div>
    </div>
@endsection
