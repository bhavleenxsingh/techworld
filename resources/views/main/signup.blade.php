@include('cmn.header')
<br><br>
<div class="container">

<h2>Create New Account</h2><br>     
<h5>
<form action="{{url('/signup')}}" method = "post">
@csrf
<div class="mb-3">
    <label for="" class="form-label">E-Mail</label>
    <input
        type="text"
        name="email"
        id=""
        class="form-center"
        value = "{{old('email', isset($signup) ? $signup->email : '' )}}"
        placeholder="Enter your E-mail"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('email')
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
        value = "{{old('name', isset($signup) ? $signup->name : '' )}}"
        placeholder="Enter your Name"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('name')
        {{$message}}
    @enderror
    </span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Mobile</label>
    <input
        type="text"
        name="phone"
        id=""
        class="form-center"
        value = "{{old('phone', isset($signup) ? $signup->phone : '' )}}"
        placeholder="Enter Mobile Number"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('phone')
        {{$message}}
    @enderror
    </span>
</div>
<div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input
        type="text"
        name="password"
        id=""
        class="form-center"
        placeholder="Enter Password"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('password')
        {{$message}}
    @enderror
    </span>
</div>

<div class="mb-3">
    <label for="" class="form-label">Confirm Password</label>
    <input
        type="text"
        name="confirmpassword"
        id=""
        class="form-center"
        placeholder="Enter Password Again"
        aria-describedby="helpId"
    />
    <span class="text-danger">
    @error('password')
        {{$message}}
    @enderror
    </span>
</div>
<button class="btn btn-primary" type = "submit">Create Account</button> &nbsp; &nbsp; &nbsp; 

<a href="{{url('/login')}}">
<button class="btn btn-primary">Login</button>
</a>

</form>
</h5>
</div>

@include('cmn.footer')