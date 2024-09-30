<div class="container">
<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
        {{-- <p class="text-body-secondary"><h1>Tech World</h1>© 2024</p>
<h1 class="d-inline">Tech World</h1>
<p class="text-body-secondary d-inline"> © 2024</p> --}}
{{-- <h1 class="d-inline">Tech World</h1>
<p class="text-body-secondary d-inline align-top"> © 2024</p> --}}
<h2 class="d-inline">Tech World</h2>
<span class="text-body-secondary d-inline align-top"> © 2024</span>

        </div>


        <div class="col mb-3">

        </div>

        <div class="col mb-5">
        <h5>Our Categories</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Keyboard') }}" class="nav-link p-0 text-body-secondary">Keyboards</a></li>
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Mouse') }}" class="nav-link p-0 text-body-secondary">Mouse</a></li>
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Storage Cards') }}" class="nav-link p-0 text-body-secondary">Storage Cards</a></li>
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Cable') }}" class="nav-link p-0 text-body-secondary">Cables</a></li>
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Combo') }}" class="nav-link p-0 text-body-secondary">Combos</a></li>
            <li class="nav-item mb-2"><a href="{{ route('categorysort', 'Other') }}" class="nav-link p-0 text-body-secondary">Others</a></li>
        </ul>
        </div>

        <div class="col mb-10">
        <h5>Our World</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{url('/')}}" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="{{route('products')}}" class="nav-link p-0 text-body-secondary">Products</a></li>
            <li class="nav-item mb-2"><a href="{{url('/faq')}}" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="{{url('/about')}}" class="nav-link p-0 text-body-secondary">About Us</a></li>
        </ul>
        </div>
@auth
        <div class="col mb-10">
        <h5> My Profile</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{url('/profile')}}" class="nav-link p-0 text-body-secondary">Profile</a></li>
            <li class="nav-item mb-2"><a href="{{url('/myprofile')}}" class="nav-link p-0 text-body-secondary">Addresses</a></li>
            <li class="nav-item mb-2"><a href="{{url('/myprofile')}}" class="nav-link p-0 text-body-secondary">Orders</a></li>
            <li class="nav-item mb-2"><a href="{{url('/cart')}}" class="nav-link p-0 text-body-secondary">Cart</a></li>
        </ul>
        </div>
@endauth
        {{-- <div class="col mb-5">
        <h5>Section</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
        </div> --}}
</footer>
</div>
</div>


<div class="b-example-divider"></div>

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