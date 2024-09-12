@include('cmn.header')
<br><br>
<div class="container">
<form action="{{$url}}" method="post">
@csrf

<h2>{{$heading}}</h2>
<br>
<div class="mb-3">
    <label for="" class="form-label">Product ID</label>
    <input
        type="text"
        name="productid"
        id=""
        class="form-center"
        value = "{{old('productid', isset($stockedit) ? $stockedit->productid : '' )}}"
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
        value = "{{ old('name', isset($stockedit) ? $stockedit->name : '')}}"
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
    <label for="" class="form-label">Image</label>
    <input
        type="file"
        name="image"
        id=""
        class="form-center"
        value = "{{ old('image', isset($stockedit) ? $stockedit->image : '')}}"
        placeholder="Upload Image..."
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('image')
        {{$message}}
    @enderror

    </span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Category</label>
    <select
        name="category"
        id=""
        class="form-center"
        value = "{{old('category', isset($stockedit) ? $stockedit->category : '' )}}"
        placeholder="Category"
        aria-describedby="helpId"
        >
        <option value="" disabled selected>Select Category</option>
        <option value="Keyboard" {{ old('type', $model->type ?? '') == 'Keyboard' ? 'selected' : '' }}>Keyboard</option>
        <option value="Mouse" {{ old('type', $model->type ?? '') == 'Mouse' ? 'selected' : '' }}>Mouse</option>
        <option value="Storage Cards" {{ old('type', $model->type ?? '') == 'Storage Cards' ? 'selected' : '' }}>Storage Cards</option>
        <option value="Cable" {{ old('type', $model->type ?? '') == 'Cable' ? 'selected' : '' }}>Cable</option>
        <option value="Combo" {{ old('type', $model->type ?? '') == 'Combo' ? 'selected' : '' }}>Combo</option>
        <option value="Other" {{ old('type', $model->type ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
    </select>    
    <span class="text-danger">
    @error('category')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Tagline</label>
    <input
        type="text"
        name="tagline"
        id=""
        class="form-center"
        value = "{{old('tagline', isset($stockedit) ? $stockedit->tagline : '' )}}"
        placeholder="Tagline"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('tagline')
        {{$message}}
    @enderror

    </span>

</div>

<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input
        type="text"
        name="description"
        id=""
        class="form-center"
        value = "{{old('description', isset($stockedit) ? $stockedit->description : '' )}}"
        placeholder="Description"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('description')
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
        value = "{{old('quantity', isset($stockedit) ? $stockedit->quantity : '' )}}"
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
        value = "{{old('mrp', isset($stockedit) ? $stockedit->mrp : '' )}}"
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
    <label for="" class="form-label">Price</label>
    <input
        type="text"
        name="price"
        id=""
        class="form-center"
        value = "{{old('price', isset($stockedit) ? $stockedit->price : '' )}}"
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