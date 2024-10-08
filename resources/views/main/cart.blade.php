@include('cmn.header')
<br>

<div class="container text-center" >
<h1 style="font-family: 'Algerian', sans-serif; font-size: 2rem; font-weight: bold;">
    Your Cart!</h1>
</div>
<div class="container text-center">
@if(Auth::check() && $cart) 
    <h3 style="text-align: center;" >
Your Cart Items:</h3><br>
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

            <tr>
            <td><b><strong>(Total Items)</strong></b></td>
            <td><b><strong>{{$totalqty}} items</strong></b></td>
            <td><b><strong>TOTAL</strong></b></td>
            <td> ₹ {{$total}}</td>
            </tr>
        </tbody>
    </table><br><br>
<div class="container text-center">
    <a href="{{route('checkout')}}" class="btn btn-primary">
    <button class="btn btn-primary">Checkout</button></a> &nbsp; &nbsp; &nbsp; 
    <a href="{{route('cart')}}" class="btn btn-primary">
    <button class="btn btn-primary" onclick = "clearCart();">Clear Cart</button></a>
</div>

@else
    <p>Your cart is empty.</p>
@endif
</div>
@include('cmn.footer')
