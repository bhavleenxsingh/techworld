@include('cmn.header')
<br>
<div
    class="table-responsive">
<div class="container"><h1>Hi, {{ Auth::user()->name }}</h1><br>
<a href="{{url('/myprofile/address/')}}"><button class="btn btn-primary">Add New Address</button></a>
<br><br>    </div>
@foreach ($address as $each)
<div class="container">

    <h4>{{$each->type}} Address -  {{$each->email}}</h4>


  {{-- <table 
            class="table table-sm table-striped table-hover table-borderless table-primary align-middle"
            style="table-layout: auto; width: auto; border-collapse: collapse;"
        > --}}
 <table 
            class="table table-sm table-striped table-hover table-borderless table-primary align-middle"
            style="border: 2px solid #000; width: 40%; table-layout: fixed; border-collapse: collapse;"
            
        >
            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000; width: 30%">Name</th>
                <td>{{ $each->name }}</td>
            </tr>

            {{-- <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Email</th>
                <td>{{$each->email}}</td>
            </tr> --}}

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Phone</th>
                <td>{{$each->phone}}</td>
            </tr>

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Gender</th>
                <td>{{$each->gender}}</td>
            </tr>

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Address</th>
                <td>{{$each->address1}}, {{$each->address2}}</td>
            </tr>

            {{-- <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Address Line 2</th>
                <td>{{$each->address2}}</td>
            </tr>

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Address Line 3</th>
                <td>{{$each->address3}}</td>
            </tr> --}}

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">City - State</th>
                <td>{{$each->city}}, {{$each->state}}</td>
            </tr>

            {{-- <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">State</th>
                <td>{{$each->state}}</td>
            </tr> --}}

            <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Pin-Code</th>
                <td>{{$each->pincode}}</td>
            </tr>

            {{-- <tr>
                <th style="padding: 0.25rem; border-right: 2px solid #000;">Type of Address</th>
                <td>{{$each->type}}</td>
            </tr> --}}
    </table>
            <a href="{{ url('/myprofile/address/edit/'.$each->addressid) }}">
                <button class="btn" style="background-color: green; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;"
            onmouseover="this.style.backgroundColor='darkgreen';"
            onmouseout="this.style.backgroundColor='green';">Edit</button></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <a href="{{url('/myprofile/address/delete/'.$each->addressid)}}">
                <button class="btn" style="background-color: red; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;"
            onmouseover="this.style.backgroundColor='darkred';"
            onmouseout="this.style.backgroundColor='red';">Delete</button></a>

</div>
<br><br>
@endforeach

</div>


@include('cmn.footer')