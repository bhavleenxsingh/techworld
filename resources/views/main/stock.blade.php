@include('cmn.header')
<br><br>
<div class="container">
<form action="{{url('/stock')}}" method="post">
@csrf

<div class="mb-3">
    <label for="" class="form-label">Product ID</label>
    <input
        type="text"
        name="productid"
        id=""
        class="form-center"
        placeholder="ID"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('productid')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input
        type="text"
        name="name"
        id=""
        class="form-center"
        placeholder="Product Name"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('name')
        {{$message}}
    @enderror

    </span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Category</label>
    <input
        type="text"
        name="category"
        id=""
        class="form-center"
        placeholder="Category"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('category')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Quantity</label>
    <input
        type="text"
        name="quantity"
        id=""
        class="form-center"
        placeholder="Quantity"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('quantity')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">MRP</label>
    <input
        type="text"
        name="mrp"
        id=""
        class="form-center"
        placeholder="Product MRP"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('mrp')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Discount (%)</label>
    <input
        type="text"
        name="discount"
        id=""
        class="form-center"
        placeholder="Discount (%)"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('discount')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input
        type="text"
        name="price"
        id=""
        class="form-center"
        placeholder="Price"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('price')
        {{$message}}
    @enderror

    </span>

</div>

<button class="btn btn-primary">ADD</button>
</form>
<br><br>
<a href="{{url('/stock/view')}}"><button class="btn btn-primary"> View Stock </button></a>

</div>
@include('cmn.footer')