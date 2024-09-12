<!doctype html>
<html lang="en">
    <head>
        <title>Tech-Eco</title>
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

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>
<header>
                <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}"> &nbsp; &nbsp; Tech World</a>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/about')}}" aria-current="page">
                    Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/products')}}" aria-current="page">
                    Products <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/stock')}}" aria-current="page">
                    Stock <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/contact')}}" aria-current="page">
                    Contact <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/signup')}}" aria-current="page">
                    Login <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/myprofile')}}" aria-current="page">
                    My Profile <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/cart')}}" aria-current="page">
                    Cart <span class="visually-hidden">(current)</span></a>
            </li>
        </ul>
    </nav>

</header>