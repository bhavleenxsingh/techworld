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
  background-color : rgb(239, 208, 116);
  border-radius: 8px;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);">
        {{-- <img
            class="card-img-top"
            src="holder.js/100x180/"
            alt="Card image cap"
        /> --}}
        <div class="card-body">
            <img src="{{ asset('uploads/product/' .($stock->image ?? 'default.png')) }}" alt="{{$stock->name}}">
            <h3 class="card-title">{{$stock->name}}</h4>
            <h5 class="card-text">{{$stock->category}}</h5>
            <h5 class="card-text">{{$stock->tagline}}</h5>
            <h5 class="card-text">{{$stock->description}}</h5>
            <h6 class="card-text"><b><s>{{$stock->mrp}}</s></b></h6> 
            <h5><b>{{$stock->price}}</b></h5> &nbsp; &nbsp;
            {{$stock->discount}}% Off <br><br>
            <a href="#"><button class="btn btn-primary">Add to Cart</button></a>
        </div>
    </div><br><br>
@endforeach
</div>
@include('cmn.footer')