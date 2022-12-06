@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1>Manage Product</h1>
        <div class="">
            @foreach ($products as $product)
                <a href="/product/{{ $product['productID'] }}" class="text-decoration-none text-dark col-3 border border-dark rounded m-2 d-flex">
                    <div class="d-flex">
                        <img src="../profile/placeholder.jpg" alt="gambar product" width="100px" class="rounded">
                        <div class="m-2">
                            <p class="mt-2">{{ $product['productName'] }}</p>
                        </div>
                    </div>
                    <div>
                        <button>Edit</button>
                        <button>Delete</button>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
