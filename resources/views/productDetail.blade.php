@extends('layouts.main')

@section('content')
<div class="d-flex p-3" style="width: 80%; background-color: white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <img src="/profile/placeholder.jpg" alt="test" width="300px">
    <div style="padding-left: 30px; width: 100%;">
        <h1>{{ $singleProduct["productName"] }}</h1>
        <form action="">
            <table style="">
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
            @if ($user->userRole == "Member")
                <label for=""><b>Qty:</b></label>
                <input type="text" style="width: 90%">
                <br> <br>
                <input type="submit" value="Purchase">
            @endif
        </form>
    </div>
</div>
@endsection