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
<h1>{{$heading}}</h1> <br>
<span class="text-muted"><p> Fields marked with (<span class="text-danger">*</span>) must be filled.</p></span>
<form method = "post" action="{{$url}}">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Name <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="name"
        id=""
        class="form-center"
        value = "{{old('name', isset($address) ? $address->name : '' )}}"
        placeholder="Name"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('name')
        {{$message}}
    @enderror
</div>

{{-- <div class="mb-3">
    <label for="" class="form-label">E-mail <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="email"
        id=""
        class="form-center"
        value = "{{old('email', isset($address) ? $address->email : '' )}}"
        placeholder="E-mail"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('email')
        {{$message}}
    @enderror
</div> --}}

<div class="mb-3">
    <label for="" class="form-label">Phone <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="phone"
        id=""
        class="form-center"
        value = "{{old('phone', isset($address) ? $address->phone : '' )}}"
        placeholder="Phone"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('phone')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">Gender <span class="text-danger">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
    
    <!-- Male Radio Button -->
    <input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}> Male &nbsp;&nbsp;
    
    <!-- Female Radio Button -->
    <input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}> Female &nbsp;&nbsp;
    
    <!-- Other Radio Button -->
    <input type="radio" name="gender" value="Other" {{ old('gender') == 'Other' ? 'checked' : '' }}> Other

    <!-- Validation Error Message -->
    <span class="text-danger">
        @error('gender')
            {{$message}}
        @enderror
    </span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Address Line 1 <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="address1"
        id=""
        class="form-center"
        value = "{{old('address1', isset($address) ? $address->address1 : '' )}}"
        placeholder="Address Line 1"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('address1')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">Address Line 2 <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="address2"
        id=""
        class="form-center"
        value = "{{old('address2', isset($address) ? $address->address2 : '' )}}"
        placeholder="Address Line 2"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('address2')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">City <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="city"
        id=""
        class="form-center"
        value = "{{old('city', isset($address) ? $address->city : '' )}}"
        placeholder="City"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('city')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">State <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="state"
        id=""
        class="form-center"
        value = "{{old('state', isset($address) ? $address->state : '' )}}"
        placeholder="State"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('state')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">Pincode <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
    <input
        type="text"
        name="pincode"
        id=""
        class="form-center"
        value = "{{old('pincode', isset($address) ? $address->pincode : '' )}}"
        placeholder="Pin-Code"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('pincode')
        {{$message}}
    @enderror
</div>


<div class="mb-3">
    <label for="" class="form-label">Type of Address <span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp; 
 <select
                name="type"
                id="type"
                class="form-center"
                value = "{{old('type', isset($address) ? $address->type : '' )}}"
                aria-describedby="typeHelpId"
            >
                <option value="" disabled selected>Select Type</option>
                <option value="Home" {{ old('type', $model->type ?? '') == 'Home' ? 'selected' : '' }}>Home</option>
                <option value="Work" {{ old('type', $model->type ?? '') == 'Work' ? 'selected' : '' }}>Work</option>
                <option value="Other" {{ old('type', $model->type ?? '') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>    <span class="text-danger">
    @error('type')
        {{$message}}
    @enderror
</div>

<div class="mb-3">
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>

</div>
</div>


</form>


@include('cmn.footer')