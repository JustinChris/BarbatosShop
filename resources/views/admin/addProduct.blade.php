@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="padding: 0 20%;">
        <p class="p-2 mt-4" style="background-color: rgb(205, 205, 205);">Add Product</p>
        <form action="/product/add" method="POST" enctype="multipart/form-data" id="addProduct">
            @csrf
            <div class="col-12">
                <label for="" class="form-label">Name</label><br>
                <input type="text" class="form-control" name="productNameAdd">
            </div>
            <div class="col-12">
                <label for="inputCategory">Category</label><br>
                <select id="inputCategory" class="form-select" name="categoryIDAdd">
                    <option selected>Choose...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category['categoryID'] }}">{{ $category["categoryName"] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="productDetail">Detail</label><br>
                <textarea name="productDetailAdd" id="productDetail" cols="30" rows="10" class="form-control" form="addProduct"></textarea>
            </div>
            <div>
                <label for="productPrice">Price</label><br>
                <input id="productPrice" type="text" class="form-control" name="productPriceAdd">
            </div>
            <div>
                <label for="productPhoto">Photo</label><br>
                <input id="productPhoto" type="file" class="form-control" name="productPhotoAdd">
            </div><br>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
