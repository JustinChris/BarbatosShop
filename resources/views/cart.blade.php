@extends('layouts.main')

@section('content')
<div class="container-fluid" style="padding: 0 20%;">
    <div class="" style="width: 100%">
        @foreach ($products as $product)
            <div class="text-decoration-none text-dark border border-dark rounded m-2 d-flex" style="justify-content: space-between;">
                <div class="text-decoration-none text-dark ">
                    <div class="d-flex">
                        <img src="{{ $product->productphoto }}" alt="gambar product" width="100px" class="rounded">
                        <div class="m-2">
                            <p class="mt-2">{{ $product->productname }}</p>
                            <p class="mt-0">Quantity: {{ $product->quantity }}</p>
                            <p class="mt-0">Total Price: {{ $product->quantity * $product->productprice}}</p>
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <a href="/transaction/cart/remove/{{ $product->productid }}" class="p-1 bg-danger rounded text-decoration-none text-dark btn-link"><i class="fa fa-trash" style="font-size:24px"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center bg-secondary" style="width: 100%; padding: 10px; margin: 0; position: fixed; bottom: 0; text-align: center;">
    <p>Total Price: Rp. {{ $total }}</p>
    <a class="bg-primary rounded text-white p-2" href="/transaction/cart/purchase">Purchase</a>
</div>
@endsection
