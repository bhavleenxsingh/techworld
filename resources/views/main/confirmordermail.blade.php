<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Title</title>
</head>
<body>
<div class="container text-center"><h5>
<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
<h3>This email is to confirm that your order has been recieved by us at Tech World. <br>
We wish to deliver on time.</h3>
    <h2>Your Cart Items:</h2>
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->itemname }}</td>
                    <td>{{ $item->itemqty }}</td>
                    <td>₹ {{ number_format($item->itemprice, 2) }}</td>
                    <td>₹ {{ number_format($item->itemqty * $item->itemprice, 2) }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
    <h3>Total: ₹ </h3>
    <h5>Expected Delivery: </h5>
</body>
</html>

</h5></div>
</body>
</html>