@extends('template.main')

@section('contain')
    <!-- Cover Start -->
    <div class="container-fluid cover d-flex p-5">
        <div class="l-cover d-flex flex-column justify-content-center col-12 col-lg-7">
            <h2 class="text-light display-6 fw-bold mt-4">
                Marketplace For Informatics Requirement
            </h2>
            <p class="text-white-50 fw-light">
                Introduced a new model for online grocery shopping and convenient home
                delivery.
            </p>
            <div>
                <a href="#product" class="btn btn-light mt-3" tabindex="-1">Shop Now <i
                        class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="r-cover d-flex flex-column col-12 col-lg-5 align-items-center justify-content-center">
            <img src="img/bengkel-cover.png" alt="" class="img-fluid mb-3 logo-cover" width="50%" />
            <h1 class="lucky-font text-white">Bengkel TI</h1>
        </div>
    </div>
    <!-- Cover End -->
    <!-- Apa itu Bengkel Start -->
    <div class="row desc-container p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="order-2 py-5 col-12 col-lg-7">
            <h1 class="display-5 fw-bold mt-5">Bengkel TI itu apa ?</h1>
            <p class="col-md-8">
                Bengkel TI adalah salah satu unit usaha program studi teknik
                informatika Universitas Darussalam Gontor yang mengatasi kerusakan
                atau kendala pada pengguna Device (Laptop,Handphone) LCD, Instalasi
                software dll, Dan juga Bengkel TI menjual beberapa Aksesoris seperti
                (Mouse, keyboard, headset, dll).
            </p>
            <a href="about.html">
                <button class="btn btn-primary btn-lg" type="button">Detail</button>
            </a>
        </div>
        <div class="order-1 desc-image col-12 col-lg-5">
            <img src="img/desc-img.png" alt="" class="img-fluid" />
        </div>
    </div>
    <!-- End -->
    <!-- Popular Product -->
    <div class="popular-product p-4 my-lg-14 my-8" id="product">
        <h3 class="mb-4 ms-4">Popular Product</h3>
        <div class="container">
            <!-- Kotakan -->
            <div class="row g-4 row-cols-lg-4 row-cols-2 row-cols-md-3">
                @foreach ($products as $product)
                    <form action="/tambah-keranjang" method="post">
                        @csrf
                        <!-- Produk 1 -->
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            <span class="badge bg-danger ms-1 mt-1"> {{ $product->diskon }} % OFF</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt=""
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
                                            <span class="text-dark" id="formattedPriceDiskon{{ $loop->iteration }}"></span>
                                            {{-- Script Harga Setelah Diskon --}}
                                            <script>
                                                // Variabel harga produk dari PHP atau framework lain
                                                var productPrice{{ $loop->iteration }} = {{ $product->price }}; // Gantilah dengan cara sesuai kebutuhan Anda

                                                // Hitung diskon 10%
                                                var discount = ({{ $product->diskon }} / 100); // 10% dalam bentuk desimal
                                                var discountedPrice = productPrice{{ $loop->iteration }} * (1 - discount);

                                                // Fungsi untuk mengubah format angka menjadi "Rp.5.600.000,-"
                                                function formatCurrency(price) {
                                                    return 'Rp.' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',-';
                                                }

                                                // Tampilkan harga setelah diskon dengan format yang diinginkan
                                                var formattedPrice = formatCurrency(discountedPrice);
                                                document.getElementById('formattedPriceDiskon' + {{ $loop->iteration }}).innerHTML = formattedPrice;
                                            </script>

                                            {{-- Script Harga Setelah Diskon --}}
                                            <span class="text-decoration-line-through text-muted"
                                                id="formattedPrice{{ $loop->iteration }}"></span>
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
                                        </div>
                                        <div>
                                            @auth
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            @endauth
                                            <button type="submit"
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
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel Start -->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x600?coding" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x600?computer" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x600?programming" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->
    <!-- ContactUs Start -->
    <div class="box-contact d-flex flex-column">
        <div>
            <h1 class="text-center mt-5">Masih Ada Kendala ?? Hubungi Kami !!</h1>
        </div>
        <div class="contact text-center">
            <div class="btn btn-lg btn-success">
                <i class="fa-brands fa-whatsapp"></i> +62 812-3423-8282
            </div>
        </div>
    </div>
    <!-- ContactUs End -->
@endsection
