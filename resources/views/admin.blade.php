@extends('template.main')

@section('contain')
    <div class="container-fluid">
        <h2 class="text-center text-decoration-underline mt-5">Admin Controller</h2>
        {{-- Box --}}
        <div class="row gap-4 justify-content-center me-4">
            {{-- Card  1 --}}
            <div class="shadow card mb-3 mt-3 border-0 p-2 floating" style="width: 180px;">
                <a href="/crud-category" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <div class=" border-end bg-card rounded">
                            <img src="img/card-img1.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <hr>
                        <h5 class="card-title text-dark fw-bold text-center">Category</h5>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
            {{-- Card 2 --}}
            <div class="shadow card mb-3 mt-3 border-0 p-2 floating" style="width: 180px;">
                <a href="/crud-product" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <div class=" border-end bg-card rounded">
                            <img src="img/card-img2.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <hr>
                        <h5 class="card-title text-dark fw-bold text-center">Product</h5>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
            {{-- Card  3 --}}
            <div class="shadow card mb-3 mt-3 border-0 p-2 floating" style="width: 180px;">
                <a href="/crud-servis" class="text-decoration-none">
                    <div class="d-flex flex-column">
                        <div class=" border-end bg-card rounded">
                            <img src="img/card-img3.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <hr>
                        <h5 class="card-title text-dark fw-bold text-center">Servis</h5>
                    </div>
                </a>
            </div>
            {{-- End Card --}}
        </div>
    </div>
@endsection
