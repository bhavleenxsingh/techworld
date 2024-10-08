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
    $totalqty = 0;
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
                            $totalqty +=  ($item->itemqty);
                        @endphp

            @endforeach
@php

    $delivery = 0;
    if ($total < 1000){
        $fakedelivery = 150;
        $delivery = ($total * 0.13) + 13;
        }
    elseif ($total == 1000){
        $fakedelivery = 200;
        $delivery = $total * 0.13;
        }
    else {
        $fakedelivery = 270;
        $delivery = 0;
        }
    $gtotal = $total + $delivery;
@endphp
            <tr>
            <td><b><strong>(Total Items)</strong></b></td>
            <td><b><strong>{{$totalqty}} items</strong></b></td>
            <td><b><strong>Delivery Charges</strong></b></td>
            <td> 
                <s>₹ {{$fakedelivery}}</s></h4> &nbsp; &nbsp;
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
{{-- <div  style="display: flex;" class="container text-center">
    <h5><b>Expected Delivery </b></h5> &nbsp; &nbsp;
    <span class="text-muted"> (3-5 Business Days)</span>&nbsp;  &nbsp;  
            - &nbsp; &nbsp; DD/MM/YYYY. <br><br>
</div> --}}

<div style = "display: flex;" class="container text-center">
<h5>Total Items =  {{$totalqty}} items</h5><br></div>
<div style="display: flex;" class="container text-center">
    <h5><b>Expected Delivery</b></h5> &nbsp; &nbsp;
    <span class="text-muted"> (3-5 Business Days)</span>&nbsp;  &nbsp;
    - &nbsp; &nbsp; <span id="delivery-date"></span> <br><br>
</div>

<script>
    // Function to format date as DD/MM/YYYY
    function formatDate(date) {
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    }

    // Get today's date
    const today = new Date();

    // Calculate expected delivery dates
    const deliveryDate3 = new Date(today);
    deliveryDate3.setDate(today.getDate() + 3); // 3 days from today

    const deliveryDate5 = new Date(today);
    deliveryDate5.setDate(today.getDate() + 5); // 5 days from today

    // Set the expected delivery date text
    document.getElementById('delivery-date').innerText = `${formatDate(deliveryDate3)} - ${formatDate(deliveryDate5)}`;
</script>
<div class="container text-center"><button type = "submit" class="btn btn-primary">
<a href="{{route('ordersuccess')}}" class="btn btn-primary">Place Order</a></button></div>
</div>

@include('cmn.footer')