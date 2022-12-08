@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="padding: 0 20%;">
        <p class="p-2 mt-4" style="background-color: rgb(205, 205, 205);">Update Product</p>
        <form action="/product/update/{{ $product->productID }}" method="POST" enctype="multipart/form-data" id="updateForm">
            @csrf
            <div class="col-12">
                <label for="" class="form-label">Name</label><br>
                <input type="text" class="form-control" value="{{ $product->productName }}" name="productNameEdit">
            </div>
            <div class="col-12">
                <label for="inputCategory">Category</label><br>
                <select id="inputCategory" class="form-select" name="categoryIDEdit">
                    <option selected>Choose...</option>
                    @foreach ($categories as $category)
                        @if ($product->categoryID == $category['categoryID'])
                        <option selected value="{{ $category['categoryID'] }}">{{ $category["categoryName"] }}</option>
                        @else
                        <option value="{{ $category['categoryID'] }}">{{ $category["categoryName"] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div>
                <label for="productDetail">Detail</label><br>
                <textarea id="productDetail" name="productDetailEdit" cols="30" rows="10" class="form-control" form="updateForm">{{$product->productDetail}}</textarea>
            </div>
            <div>
                <label for="productPrice">Price</label><br>
                <input id="productPrice" type="text" class="form-control" value="{{$product->productPrice}}" name="productPriceEdit">
            </div>
            <div>
                <label for="productPhoto">Photo</label><br>
                <img src="{{$product->productPhoto}}" alt="{{$product->productName}}" width="40%">
                <input id="productPhoto" type="file" class="form-control" name="productPhotoEdit">
            </div><br>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
