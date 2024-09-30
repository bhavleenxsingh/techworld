@include('cmn.header')
<br>

<h1>
            <div class="container" style="display: flex; align-items: center;">
    Category - {{$category}} &nbsp; &nbsp; &nbsp; 
<a href="{{url('/')}}">                
<h5 style="margin: 0;"><span class="text-muted">Show All Products</span></a></h5>
            </div><br>

</h1>

<div class="card-container" 
    style = " display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px;">
@foreach($products as $cat)
    <div class="card" 
style = "margin: 10px;
  padding: 2px;
  border: 1px solid #ccc;
  width : 25%;
  background-color : rgb(216, 214, 214);
  border-radius: 8px;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);">
        <div class="card-body">
            <img class="card-img-top" src="{{ asset('storage/products/' . $cat->image) }}" 
                alt="{{$cat->name}}"  width = "auto" height="auto" style = "object-fit: cover">
                <h3 class="card-title">{{$cat->name}}</h4>
            <span class="text-muted">  
                <h6 class="card-text">{{$cat->category}}</h6>
            </span>
                <h5 class="card-text">{{$cat->tagline}}</h5>
                <h6 class="card-text">{{$cat->description}}</h6>
            <span class="text-danger">
                <h5 class="card-text"><b><s>₹ {{$cat->mrp}}</s></b></h5>
            </span> 
            <div style="display: flex; align-items: center;">
                <h4 style="margin: 0;"><b>₹ {{$cat->price}}</b></h4> &nbsp; &nbsp;
                <h5 style="margin: 0;"><strong><span class="text-success">{{$cat->discount}}% Off</span></strong></h5>
            </div><br>
            <a href="#"><button class="btn btn-primary">Add to Cart</button></a>
        </div>
    </div>
@endforeach
</div>
@include('cmn.footer')