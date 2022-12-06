@extends('layouts.main')

@section('content')
<style>
  ::-webkit-scrollbar {
  height: 5px;
  border: 1px solid #d5d5d5;
}

::-webkit-scrollbar-track {
  border-radius: 0;
  background: #c2c2c2;
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: #454545;
}
</style>
@foreach($categories as $category)
  <div class="container-fluid" style="padding: 10px; margin: 10px 20px; width: 97%;">
    <h5 style="background-color: rgb(172, 172, 172); padding: 5px;">{{ $category["categoryName"] }} <a href="/product/category/{{ $category["categoryID"] }}">View All</a></h5>
    <div class="row flex-row flex-nowrap " style="overflow-x: scroll; background-color: rgb(212, 212, 212); margin: 0;">
      @foreach ($products as $product)
        @if($category["categoryID"] == $product["categoryID"])
          <a href="/product/{{ $product['productID'] }}" class="text-decoration-none text-dark col-2" style="margin: 0; padding: 0;">
            <div class="border border-dark rounded m-2" style="width: 15vw; height: 50vh;">
              <img src="profile/placeholder.jpg" alt="gambar product" width="100%" class="rounded-top">
              <div class="m-2">
                <div class="mt-3 bg-success text-light text-center fw-bold rounded border border-dark" style="width: 40%;"> {{ $product["productCategory"] }} </div>
                <p class="mt-2">{{ $product["productName"] }}</p>
                <h2 class="fw-bold">Rp {{ $product["productPrice"] }}</h2>
              </div>
            </div>
          </a>
        @endif
      @endforeach
    </div>
  </div>
@endforeach
@endsection