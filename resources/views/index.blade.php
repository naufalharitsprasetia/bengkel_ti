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
                <!-- Produk 1 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/laptop.png" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Laptop</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">Asus Vivobook V415JP
                                    4GB/128GB</a>
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
                                    <span class="text-dark">Rp.5.699.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.7.999.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 2 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/laptop1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Laptop</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">Laptop Baru Asli Layar HD
                                    15.6 inch 8GB 256GB...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.2(49)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.3.430.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.4.999.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 3 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/mouse1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Mouse</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">Newfun Mouse Wireless
                                    Optical Silent...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.7(249)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.99.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.179.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 4 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/headset1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Mouse</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">Rexus Vonix F80 RGB -
                                    Gaming Headset...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.4(109)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.289.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.379.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 5 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/pc1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>PC</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">PC GAMING Intel Core i3
                                    10105F I GT 1030 2G I RAM 8GB I SSD
                                    I HDD...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.7(29)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.3.569.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.4.129.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 6 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/monitor1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Monitor</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">AOC 24G2SPE 24" IPS 1ms
                                    165Hz Gaming Monitor...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.9(95)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.1.936.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.2.249.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 7 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/keyboard1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Keyboard</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">Keyboard Gaming Altec
                                    Lansing ALGK-8404 White Grey...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.7(144)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.1.936.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.2.249.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Produk 8 -->
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <a href="#">
                                    <img src="img/fullpc1.jpg" alt="" class="mb-3 img-fluid" /></a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted"><small>Full PC</small></a>
                            </div>
                            <h2 class="fs-6">
                                <a href="#" class="text-inherit text-decoration-none">PC Gaming Full Set Core i5
                                    RAM 8GB SSD 128GB VGA 2GB
                                    Monitor LED 19 Lengkap Siap Pakai...</a>
                            </h2>
                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span class="text-muted small">4.5(54)</span>
                            </div>
                            <div class="price-card d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp.3.000.000,-</span>
                                    <span class="text-decoration-line-through text-muted">Rp.3.549.000,-</span>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <i class="fa-brands fa-whatsapp"></i> +62 812234238282
            </div>
        </div>
    </div>
    <!-- ContactUs End -->
@endsection
