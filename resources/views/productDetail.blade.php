@extends('layouts.main')

@section('content')
<div class="d-flex p-3" style="width: 80%; background-color: white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <img src="/profile/placeholder.jpg" alt="test" width="300px">
    <div style="padding-left: 30px; width: 100%;">
        <h1>{{ $singleProduct["productName"] }}</h1>
        <form action="/transaction/cart/add/{{ $singleProduct['productID'] }}" method="POST">
            <table>
                <tr>
                    <th>Detail</th>
                    <td>{{ $singleProduct["productDetail"] }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $singleProduct["productPrice"] }}</td>
                </tr>
            </table>
            @if ($user->userRole == "Member")
                @csrf
                <label for=""><b>Qty</b></label>
                <input type="text" style="width: 90%" name='quantity'>
                <br><br>
                <input type="submit" value="Purchase">
            @endif
        </form>
    </div>
</div>
@endsection