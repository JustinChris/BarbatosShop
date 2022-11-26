@extends('layouts.main')

@section('content')
    <div>
        <h4>{{ $category['categoryName'] }}</h4>
        <div class="d-flex">
            @foreach ($products as $product)
                <a href="/product/{{ $product['productID'] }}" class="text-decoration-none text-dark">
                    <div class="border border-dark rounded m-2" style="width: 280px; height: 417px;">
                        <img src="profile/placeholder.jpg" alt="gambar product" width="278px" class="rounded-top">
                        <div class="m-2">
                            <div class="mt-3 bg-success text-light text-center fw-bold rounded border border-dark"
                                style="width: 40%;"> {{ $product['productCategory'] }} </div>
                            <p class="mt-2">{{ $product['productName'] }}</p>
                            <h2 class="fw-bold">Rp {{ $product['productPrice'] }}</h2>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@endsection
