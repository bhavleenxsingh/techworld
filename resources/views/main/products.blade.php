@include('cmn.header')

<style>
card {
  margin: 20px; /* Adds space around the card */
  padding: 15px; /* Optional: Adds space inside the card */
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
}
</style>
<div class="b-example-divider"></div>
<br><br>
<div class="container text-center">
    <h1  style="font-family: 'Algerian', sans-serif; font-size: 2rem; font-weight: bold;">
Our Tech Products</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">
</div>

<div class="card-container" 
    style = " display: flex;
    flex-wrap: wrap; /* Allows wrapping to a new line if there are too many cards */
    justify-content: space-around; /* Spaces cards evenly */
    margin: 20px;">
@foreach($stockall as $stock)
    <div class="card" 
style = "margin: 20px; /* Adds space around the card */
  padding: 2px; /* Optional: Adds space inside the card */
  border: 1px solid #ccc;
  width : 25%;
  background-color : rgb(216, 214, 214);
  border-radius: 8px;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);">

        <div class="card-body">
            <img class="card-img-top" src="{{ asset('storage/products/' . $stock->image) }}" 
                alt="{{$stock->name}}" width = "100%" height="auto" style = "object-fit: cover">
<br><br>
                <h3 class="card-title"  style="font-family: 'Algerian', sans-serif; font-size: 2rem; font-weight: bold;">
{{$stock->name}}</h4>
            <span class="text-muted">  
                <h6 class="card-text">{{$stock->category}}</h6>
            </span>
                <h5 class="card-text">{{$stock->tagline}}</h5>
                <h6 class="card-text">{{$stock->description}}</h6>
            <span class="text-danger">
                <h5 class="card-text"><b><s>₹ {{$stock->mrp}}</s></b></h5>
            </span> 
            <div style="display: flex; align-items: center;">
                <h4 style="margin: 0;"><b>₹ {{$stock->price}}</b></h4> &nbsp; &nbsp;
                <h5 style="margin: 0;"><strong><span class="text-success">{{$stock->discount}}% Off</span></strong></h5>
            </div><br>
 @auth
    <button class="btn btn-primary"  
        onclick="addToCart('{{$stock->name}}', 1, {{$stock->price}}); 
                 submitCart();">
        Add to Cart
    </button>
@endauth

@guest
    <a href="{{ route('login') }}?redirect={{ urlencode(request()->fullUrl()) }}">
        <button class="btn btn-primary">
            Add to Cart
        </button>
    </a>
@endguest
        </div>
    </div>
@endforeach
</div>

@include('main.cartscript')
@include('cmn.footer')