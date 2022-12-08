@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="padding: 0 20%;">
        <form action="/product/manage">
            <div class="input-group my-3 px-2">
                <input type="text" class="form-control" placeholder="Search Product Name..." name="search" value="{{request('search')}}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
                <a href="/product/add" class="text-decoration-none rounded bg-primary text-white p-2 mx-2"> Add Product +</a>
            </div>
        </form>
        <div class="" style="width: 100%">
            @foreach ($products as $product)
                <div class="text-decoration-none text-dark border border-dark rounded m-2 d-flex" style="justify-content: space-between;">
                    <a href="/product/{{ $product['productID'] }}" class="text-decoration-none text-dark ">
                        <div class="d-flex">
                            <img src="{{ $product['productPhoto'] }}" alt="gambar product" width="100px" class="rounded">
                            <div class="m-2">
                                <p class="mt-2">{{ $product['productName'] }}</p>
                            </div>
                        </div>
                    </a>
                    <div class="m-2">
                        <a href="/product/update/{{ $product['productID'] }}" class="p-1 bg-warning rounded text-decoration-none text-dark btn-link"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                        <a href="/product/delete/{{ $product['productID'] }}" class="p-1 bg-danger rounded text-decoration-none text-dark btn-link"><i class="fa fa-trash" style="font-size:24px"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection
