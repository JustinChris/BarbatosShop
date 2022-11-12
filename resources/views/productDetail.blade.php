@extends('layouts.main')

@section('content')
<div class="d-flex">
    <img src="/profile/placeholder.jpg" alt="test" width="300px">
    <div>
        <h1>{{ $singleProduct["productName"] }}</h1>
        <form action="">
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
            {{-- TODO: Ganti role jadi object User --}}
            @if ($role == "Customer")
                <label for=""><b>Qty:</b></label>
                <input type="text">
                <br> <br>
                <input type="submit" value="Purchase">
            @endif
        </form>
    </div>
</div>
@endsection