@extends('layouts.main')

@section('content')
    <div>
        
        <form action="/product/category/{{ $category['categoryID'] }}">
            <h4 class="px-2 mb-1">{{ $category['categoryName'] }}</h4>
            <div class="input-group mb-3 px-2">
                <input type="text" class="form-control" placeholder="Search Product Name..." name="search" value="{{request('search')}}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </div>
        </form>

        
        <div class="d-flex flex-wrap">
            @foreach ($products as $product)
                <a href="/product/{{ $product['productID'] }}" class="text-decoration-none text-dark">
                    <div class="border border-dark rounded m-2" style="width: 17vw; height: 50vh;">
                        <img src="profile/placeholder.jpg" alt="gambar product" width="15vw" class="rounded-top">
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

        {{ $products->links() }}
    </div>
@endsection
