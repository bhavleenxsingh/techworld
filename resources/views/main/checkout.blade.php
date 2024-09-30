@include('cmn.header')
<br>
<div class="container text-center">
<h1>Checkout</h1>
<h3>Your Order : </h3>
    <table class="table table-bordered" style="margin: 0 auto; width: 80%;">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
@php
    $total = 0;
@endphp
            @foreach(json_decode($cart->items) as $item)
                <tr>
                    <td>{{ $item->itemname }}</td>
                    <td>{{ $item->itemqty }}</td>
                    <td>₹ {{ $item->itemprice }}</td>
                    <td>₹ {{ $item->itemqty * $item->itemprice }}</td>
                </tr>
@php
                            
                            // Calculate the total for each item
                            $total +=  ($item->itemqty * $item->itemprice);
                        @endphp

            @endforeach
@php

    $delivery = 0;
    if ($total < 1000){
        $delivery = ($total * 0.13) + 13;
        }
    elseif ($total == 1000){
        $delivery = $total * 0.13;
        }
    else {
        $delivery = 0;
        }
    $gtotal = $total + $delivery;
@endphp
            <tr>
            <td> </td>
            <td> </td>
            <td><b><strong>Delivery Charges</strong></b></td>
            <td> 
                <s>₹ {{$total*0.22}}</s></h4> &nbsp; &nbsp;
                <strong><span class="text-dark">₹ {{$delivery}}</span></strong></h5>


</td>
            </tr>
            <tr>
            <td> </td>
            <td> </td>
            <td><b><strong>GRAND TOTAL</strong></b></td>
            <td> ₹ {{$gtotal}}</td>
            </tr>
        </tbody>
    </table><br><br>
<div  style="display: flex;" class="container text-center">
    <h5><b>Expected Delivery </b></h5> &nbsp; &nbsp;
    <span class="text-muted"> (3-5 Business Days)</span>&nbsp;  &nbsp;  
            - &nbsp; &nbsp; DD/MM/YYYY. <br><br>
</div>
<div class="container text-center"><a href="#" class="btn btn-primary">Place Order</a></div>
</div>

@include('cmn.footer')