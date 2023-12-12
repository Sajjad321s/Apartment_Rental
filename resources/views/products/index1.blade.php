@extends('layouts.app1')
@section('main')

<style>
        body {
            background-image: url("{{ asset('show1.avif') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }
        h1 {
            text-align: center;
            margin-top: 15px; /* Adjust the margin-top as needed */
        }


       
</style>

<div class="row d-flex justify-content-center m-4">
<form action="{{ route('products.index1') }}" method="GET">
<div class="form-group">
    <label for="location">Location:</label>
    <input type="text" name="location" id="location" value="{{$location}}">
 

    <label for="min_price">Min Price:</label>
    <input type="number" name="minPrice" id="minPrice" value="{{$minPrice}}">

    <label for="max_price">Max Price:</label>
    <input type="number" name="maxPrice" id="maxPrice" value="{{$maxPrice}}">

    <label for="beds">Beds:</label>
    <input type="number" name="beds" id="beds" value="{{$beds}}">

    <button type="submit" class="btn btn-success">Search</button>
</div>    
</form>
</div>

</form>
    <style>

        th, td {
            
            text-align: center;
        }
        thead {
            background-color: #A3C1AD; /* Dark ash color */
        }
        
    </style>
    <div class="container">
        
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Price(BDT)</th>
                        <th>Area(sqrt)</th>
                        <th>Beds(no.)</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <cente>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><a href="products/{{ $product->id }}/show " class="text-dark">{{ $product->name }}</a></td>
                        <td>{{ $product->location }} </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->area }}</td>
                        <td>{{ $product->beds }}</td>

                        <td>
                            <img src="products/{{ $product->image }}" class="rounded" width="60" height="60" />
                        </td>
                        <td>
                            <a href="products/{{ $product->id }}/show1 " class="btn btn-info btn-sm">Show</a>
                            <a href="customers/{{ $product->id }}/show2 " class="btn btn-success btn-sm">Contract</a>
                            <!--<a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a> -->   
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
                
                
                <h1>Apartments Showcase</h1>
            </table>
            
            {{$products->links('pagination::bootstrap-5')}}
            
    </div>
@endsection
 