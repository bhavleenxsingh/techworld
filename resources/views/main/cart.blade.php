@include('cmn.header')
<br>

<div class="container text-center">
<h1>Your Cart!</h1>
</div>
<div class="container text-center">
@if(Auth::check() && $cart) 
    <h3 style="text-align: center;">Your Cart Items:</h3>
    <ul>

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

            <tr>
            <td> </td>
            <td> </td>
            <td><b><strong>TOTAL</strong></b></td>
            <td> ₹ {{$total}}</td>
            </tr>
        </tbody>
    </table><br><br>
<div class="container text-center">
    <a href="{{route('checkout')}}" class="btn btn-primary">Checkout</a>
</div>
@else
    <p>Your cart is empty.</p>
@endif
</div>
@include('cmn.footer')

{{-- @foreach(json_decode($cart->items) as $item)
<div class="card-container" 
    style = "    flex-wrap: wrap; /* Allows wrapping to a new line if there are too many cards */
    justify-content: space-around; /* Spaces cards evenly */
    margin: 20px;">

        <div class="card text-start" 
            style = "margin: 20px; /* Adds space around the card */
            padding: 15px; /* Optional: Adds space inside the card */
            border: 1px solid #ccc;
            width : 25%;
            background-color : rgb(216, 214, 214);
            border-radius: 8px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);">
            <div class="card-body">
                <h2 class="card-title">{{ $item->itemname }}</h2>
                <h5 class="card-text">Quantity : {{ $item->itemqty }}</h5>
                <h4 class="card-text" style="margin: 0;"><b>Price: ₹ {{ $item->itemprice }}</b></h4>
            </div>
        </div>
</div>        


        <li>{{ $item->itemname }} - Quantity: {{ $item->itemqty }}, Price: {{ $item->itemprice }}</li>


        @endforeach
    </ul> 
@else
    <p>Your cart is empty.</p>
@endif
<br>  --}}
