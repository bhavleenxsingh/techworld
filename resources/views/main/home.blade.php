@include('cmn.header')

<br><br>
<div class="container text-center">
<h1 style="font-family: 'Algerian', sans-serif; font-size: 2rem; font-weight: bold; color: #242447;">
Tech &nbsp;World</h1></div><br>
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    {{-- <ol class="carousel-indicators">
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="First slide"
        ></li>
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="1"
            aria-label="Second slide"
        ></li>
        <li
            data-bs-target="#carouselId"
            data-bs-slide-to="2"
            aria-label="Third slide"
        ></li>
    </ol> --}}
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <a href="{{route('products')}}">
            <img
                src="storage/otherpictures/1727719150_combo.jpg"
                {{-- style="width: auto; height: 200px;" --}}
                style="width: 100%; height: 400px; object-fit: cover;"
                class="w-100 d-block"
                alt="First slide"
            /></a>
        </div>

        <div class="carousel-item">
            <a href="{{route('products')}}">
            <img
                src="storage/otherpictures/1727719025_Keyboard.webp"
                {{-- style="width: auto; height: 200px;" --}}
                style="width: 100%; height: 400px; object-fit: cover;"
                class="w-100 d-block"
                alt="Second slide"
            /></a>
        </div>

        <div class="carousel-item">
            <a href="{{route('products')}}">
            <img
                src="storage/otherpictures/1727720179_1727719054_Mouse.jpg"
                {{-- style="width: auto; height: 200px;" --}}
                style="width: 100%; height: 400px; object-fit: cover;"
                class="w-100 d-block"
                alt="Third slide"
            /></a>
        </div>

    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselId"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


  <!-- Featured Products Section -->
    <section style="background-color: #f8f9fa; padding: 40px 20px;">
        <h2 style="text-align: center; color: #007bff; font-size: 2rem;">Featured Products</h2>
        <div style="display: flex; justify-content: space-around; margin-top: 20px;">
            <div style="text-align: center; max-width: 250px;">
                <img src="storage/otherpictures/1727720179_1727719054_Mouse.jpg" style="width: 100%; height: auto;" alt="Product 1">
                <p><strong>Toad</strong></p>
                <p>₹ 649/-</p>
                <a href="{{route('products')}}" style="color: #007bff; text-decoration: none;">View Product</a>
            </div>
            <div style="text-align: center; max-width: 250px;">
                <img src="storage/otherpictures/1727719025_Keyboard.webp" style="width: 100%; height: auto;" alt="Product 2">
                <p><strong>Pebble Keyboard</strong></p>
                <p>₹ 1849/-</p>
                <a href="{{route('products')}}" style="color: #007bff; text-decoration: none;">View Product</a>
            </div>
            <div style="text-align: center; max-width: 250px;">
                <img src="storage/otherpictures/1727719150_combo.jpg" style="width: 100%; height: auto;" alt="Product 3">
                <p><strong>Pebble 2.0 Combo</strong></p>
                <p>₹ 3849/-</p>
                <a href="{{route('products')}}" style="color: #007bff; text-decoration: none;">View Product</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section style="background-color: #fff; padding: 40px 20px;">
        <h2 style="text-align: center; color: #333; font-size: 2rem;">What Our Customers Say</h2>
        <div style="display: flex; justify-content: space-around; margin-top: 20px;">
            <div style="max-width: 250px; text-align: center;">
                <p style="font-style: italic;">"Great products and fast delivery!"</p>
                <p><strong>- John Doe</strong></p>
            </div>
            <div style="max-width: 250px; text-align: center;">
                <p style="font-style: italic;">"Excellent customer service and quality tech accessories."</p>
                <p><strong>- Jane Smith</strong></p>
            </div>
            <div style="max-width: 250px; text-align: center;">
                <p style="font-style: italic;">"Tech World has become my go-to place for tech needs!"</p>
                <p><strong>- Alex Lee</strong></p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section style="background-color: #f8f9fa; padding: 40px 20px;">
        <h2 style="text-align: center; color: #007bff; font-size: 2rem;">About Tech World</h2>
        <p style="max-width: 800px; margin: 0 auto; text-align: center; font-size: 1.2rem;">
            Tech World started with a vision to bring the best tech accessories to everyone. 
            We offer products ranging from charging cables to storage cards, 
            ensuring top quality at affordable prices.
        </p>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{route('about')}}" style="color: #007bff; text-decoration: none;">Learn More</a>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section style="background-color: #007bff; color: #fff; padding: 40px 20px;">
        <h2 style="text-align: center; font-size: 2rem;">Stay Updated with Tech World</h2>
        <p style="max-width: 800px; margin: 0 auto; text-align: center; font-size: 1.2rem;">
            Sign up for our newsletter to receive exclusive offers and the latest updates on our products.
        </p>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{route('contact')}}" style="color: #fff; background-color: #0056b3; 
                padding: 10px 20px; border-radius: 5px; text-decoration: none;">Subscribe Now</a>
        </div>
    </section>


@include('cmn.footer')