@include('cmn.header')
<br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
<form action="{{$url}}" method="post" enctype = "multipart/form-data">
@csrf

<div class="container" style="display: flex; align-items: center;">
<h2>{{$heading}}</h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  <span>
<a href="{{url('/stock/view')}}"><button class="btn btn-primary"> View Stock </button>
</a></span></div>
<br>

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
        aria-describedby="helpId"
    />

    @if(isset($stockedit) && $stockedit->image)
        <div class="mt-2">
            <img src="{{ asset('storage/products/' . $stockedit->image) }}" alt="Current Image" width="150px">
            <p>Current Image</p>
        </div>
    @endif
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
        <option value="Keyboard" {{ old('category', $stockedit->category ?? '') == 'Keyboard' ? 'selected' : '' }}>Keyboard</option>
        <option value="Mouse" {{ old('category', $stockedit->category ?? '') == 'Mouse' ? 'selected' : '' }}>Mouse</option>
        <option value="Storage Cards" {{ old('category', $stockedit->category ?? '') == 'Storage Cards' ? 'selected' : '' }}>Storage Cards</option>
        <option value="Cable" {{ old('category', $stockedit->category ?? '') == 'Cable' ? 'selected' : '' }}>Cable</option>
        <option value="Combo" {{ old('category', $stockedit->category ?? '') == 'Combo' ? 'selected' : '' }}>Combo</option>
        <option value="Other" {{ old('category', $stockedit->category ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
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