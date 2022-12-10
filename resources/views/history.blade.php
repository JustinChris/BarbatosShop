@extends('layouts.main')

@section('content')
<div class="container-fluid" style="padding: 0 20%;">
    @foreach ($transactions as $transaction)
        <div class="">
            <p class="p-2" style="background-color: rgb(138, 214, 255)">Transaction Date {{ $transaction->transactionDate }}</p>
            <table style="width: 100%; border: 2px solid black;">
                <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Sub Price</th>
                </tr>
                @foreach ($details as $detail)
                <tr>
                    @if ($transaction->transactionID == $detail->transactionID)
                        <td style="width: 70%">{{ $detail->productname }}</td>
                        <td style="width: 10%">{{ $detail->quantity }}</td>
                        <td style="width: 20%">Rp. {{ $detail->productprice * $detail->quantity }}</td>
                    @endif
                </tr>
                @endforeach
                <tr style="border: 1px solid black;">
                    <td><b>Total</b></td>
                    <td>{{ $totalItem }} item(s)</td>
                    <td>Rp. {{ $totalPrice }}</td>
                </tr>
            </table>
        </div>
    @endforeach
</div>
@endsection
