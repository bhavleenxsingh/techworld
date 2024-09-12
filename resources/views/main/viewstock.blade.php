@include('cmn.header')

<!doctype html>
<html lang="en">
    <head>
        <title>View Stock</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
<br>
<div class="text-center"><h1>Stock Available</h1></div>
<br><br>
<div
    class="table-responsive" style="margin-left: 50px; margin-right: 50px;"
    style="table-layout: auto;"
>

    <table
        class="table table-striped table-hover table-borderless table-primary align-middle"
    >
        <thead class="table-light">
            <caption>
                Stock Available
            </caption>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Tagline</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Discount</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr
                class="table-primary"
            >
            @foreach ($stockall as $stockeach)
                <td scope="row">{{$stockeach->productid}}</td>
                <td>{{$stockeach->name}}</td>
                <td>{{$stockeach->category}}</td>
                <td>{{$stockeach->tagline}}</td>
                <td>{{$stockeach->description}}</td>
                <td>{{$stockeach->quantity}}</td>
                <td>{{$stockeach->mrp}}</td>
                <td>{{$stockeach->discount}}</td>
                <td>{{$stockeach->price}}</td>
                <td>{{$stockeach->image}}</td>
                <td><a href="{{url('/stock/edit/')}}/{{$stockeach->productid}}">
                        <button class = "btn" style="background-color: green; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;"
            onmouseover="this.style.backgroundColor='darkgreen';"
            onmouseout="this.style.backgroundColor='green';">
        Edit
    </button></a> &nbsp; &nbsp; 
                    <a href="{{url('/stock/delete/')}}/{{$stockeach->productid}}">
                         <button class = "btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;"
            onmouseover="this.style.backgroundColor='darkred';"
            onmouseout="this.style.backgroundColor='red';">
        Delete
    </button></a></td>
            </tr>
            @endforeach
    </table>
</div>

<br><br>
<div class="text-center">
<a href="{{url('/stock')}}">
<button class="btn btn-primary"> Add New Product </button>
</a>
</div>



        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

@include('cmn.footer')