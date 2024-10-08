@include('cmn.header')

<div class="container text-center">
<h1  style="font-family: 'Algerian', sans-serif; font-size: 2rem; font-weight: bold;">
Not Found!</h1><br>
<h3>The Page you are trying to load could not be found.</h3><br>
<a href="{{url('/myprofile/address/')}}"><button class="btn btn-primary">Add New Address</button></a>
<br>
</div>


@include('cmn.footer')