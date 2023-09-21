@extends('template.main')

@section('contain')
    <div class="container-fluid">
        <h1 class="text-center mt-4">Halaman Shop</h1>
        {{-- Catergory Start --}}

        {{-- Catergorys End --}}
        <!-- Popular Product -->
        {{-- Sidebar --}}

        {{-- End Sidebar --}}
        <div class="popular-product p-4 my-lg-14 my-8" id="product">
            <div class="d-flex ms-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="/shop/{{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <h3 class="mb-4 ms-4 me-2">All Product @if ($now !== null)
                        in Category : <span class="btn btn-primary">{{ $now->name }}</span>
                    @endif
                </h3>
            </div>
            <div class="container">
                <!-- Kotakan -->
                <div class="row g-4 row-cols-lg-4 row-cols-2 row-cols-md-3">
                    @foreach ($products as $product)
                        <!-- Produk 1 -->
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            <span class="badge bg-danger ms-1 mt-1">Sale</span>
                                        </div>
                                        <a href="#">
                                            <img src="/img/{{ $product->image }}" alt=""
                                                class="mb-3 img-fluid" /></a>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!"
                                            class="text-decoration-none text-muted"><small>{{ $product->category->name }}</small></a>
                                    </div>
                                    <h2 class="fs-6">
                                        <a href="#"
                                            class="text-inherit text-decoration-none">{{ $product->nama_produk }}</a>
                                    </h2>
                                    <div>
                                        <small class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i></small>
                                        <span class="text-muted small">4.5(149)</span>
                                    </div>
                                    <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            {{-- harga setelah diskon --}}
                                            <span class="text-dark" id="formattedPrice{{ $loop->iteration }}"></span>
                                            <script>
                                                // Variabel harga produk dari PHP atau framework lain
                                                var productPrice{{ $loop->iteration }} = {{ $product->price }};; // Gantilah dengan cara sesuai kebutuhan Anda

                                                // Fungsi untuk mengubah format angka menjadi "Rp.5.600.000,-"
                                                function formatCurrency(price) {
                                                    return 'Rp.' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',-';
                                                }

                                                // Tampilkan harga produk dengan format yang diinginkan
                                                var formattedPrice = formatCurrency(productPrice{{ $loop->iteration }});
                                                document.getElementById('formattedPrice' + {{ $loop->iteration }}).innerHTML = formattedPrice;
                                            </script>
                                            {{-- harga asli --}}
                                            <span class="text-decoration-line-through text-muted">Rp.7.999.000,-</span>
                                        </div>
                                        <div>
                                            <button type="button"
                                                onclick="Swal.fire('Berhasil', 'berhasil ditambahkan', 'success')"
                                                class="btn btn-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                                Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
