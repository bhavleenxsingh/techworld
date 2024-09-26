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
    </head>

    <body>
<header>
                <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}"> &nbsp; &nbsp; Tech World</a>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/home')}}" aria-current="page">
                    Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/about')}}" aria-current="page">
                    About <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}" aria-current="page">
                    Products <span class="visually-hidden">(current)</span></a>

            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle text-light"
                    style="opacity: 1;"
                    href="#"
                    id="dropdownId"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Categories</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ route('categorysort', 'Keyboard') }}">Keyboards</a>
                    <a class="dropdown-item" href="{{ route('categorysort', 'Mouse') }}">Mouse</a>
                    <a class="dropdown-item" href="{{ route('categorysort', 'Storage Cards') }}">Storage Cards</a>
                    <a class="dropdown-item" href="{{ route('categorysort', 'Cable') }}">Cables</a>
                    <a class="dropdown-item" href="{{ route('categorysort', 'Combo') }}">Combo Offers</a>
                    <a class="dropdown-item" href="{{ route('categorysort', 'Other') }}">Others</a>
                </div>
            </li>

@if (Auth::check() && Auth::user()->email == 'admin@admin.com')

            </li>
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/stock')}}" aria-current="page">
                    Stock <span class="visually-hidden">(current)</span></a>
            </li>
@else
            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/contact')}}" aria-current="page">
                    Contact <span class="visually-hidden">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href = "{{url('/cart/store')}}" aria-current="page">
                    Cart - ₹  <span class="visually-hidden">(current)</span></a>
            </li>
@endif
@auth
        </ul>
        <ul class="ms-auto navbar-nav">
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownId" data-bs-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">Hi, {{ Auth::user()->name }}!</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownId">
                <li><a class="dropdown-item" href="{{url('/profile')}}">My Profile</a></li>
                <li><a class="dropdown-item" href="{{url('/myprofile')}}">Addresses</a></li>
                <li><a class="dropdown-item" href="{{url('/myprofile')}}">Orders</a></li>
                <li><a class="dropdown-item" href="{{url('/cart/store')}}">Cart</a></li>
                <li><a class="dropdown-item"><form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button class= "nav-link text-dark" type="submit">
                            {{ __('Log Out') }}
                        </button>
                    </form></a></li>
            </ul>
        </li>

<li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button class= "text-light nav-link" type="submit">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
        </ul>&nbsp; &nbsp;  
@endauth

<ul class="ms-auto navbar-nav">
@if (!Auth::check())
            <li class="nav-item ms-auto">
                <a class="nav-link active" href = "{{url('/login')}}" aria-current="page">
                    Login <span class="visually-hidden">(current)</span></a>
            </li>
 
@endif 
</ul> 
 </nav>

</header>


