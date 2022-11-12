@extends('layouts.main')

@section('content')
@foreach($categories as $category)
  <div class="container-fluid">
    <h4>{{ $category["categoryName"] }} <a href="#">View All</a></h4>
    <div class="row flex-row flex-nowrap" style="overflow-x: scroll;">
      @foreach ($products as $product)
        @if($category["categoryID"] == $product["categoryID"])
          <a href="" class="text-decoration-none text-dark col-3">
            <div class="border border-dark rounded m-2" style="width: 280px; height: 417px;">
              <img src="profile/placeholder.jpg" alt="gambar product" width="278px" class="rounded-top">
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