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
    <h1>Our Tech Products</h1>


<br><button class="btn btn-primary" id = "clickb">Javascript Tester</button>
<script>


const el = document.getElementById("clickb");
function dothis(){
console.log("I am Clicked");
el.textContent = "Clicked";
}

el.addEventListener("click", dothis);
</script>
</div>

<div class="card-container" 
    style = " display: flex;
    flex-wrap: wrap; /* Allows wrapping to a new line if there are too many cards */
    justify-content: space-around; /* Spaces cards evenly */
    margin: 20px;">
@foreach($stockall as $stock)
    <div class="card" 
style = "margin: 20px; /* Adds space around the card */
  padding: 15px; /* Optional: Adds space inside the card */
  border: 1px solid #ccc;
  width : 25%;
  background-color : rgb(216, 214, 214);
  border-radius: 8px;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);">
        {{-- <img
            class="card-img-top"
            src="holder.js/100x180/"
            alt="Card image cap"
        /> --}}
        <div class="card-body">
            <img src="{{ asset('storage/products/' . $stock->image) }}" alt="{{$stock->name}}">
                <h3 class="card-title">{{$stock->name}}</h4>
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
            <a href="#"><button class="btn btn-primary">Add to Cart</button></a>
        </div>
    </div>
@endforeach
</div>
@include('cmn.footer')