@extends('layouts.app')
@section('main')
    <style>
        body {
            background-image: url("{{ asset('record1.jpg') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }

        th, td {
            
            text-align: center;
        }
        thead {
            background-color: #72A0C1; /* Dark ash color */
        }
    </style>
    <div class="container">
        <div class="text-right">
            <a href="products/create" class ="btn btn-dark mt-2">Add Apartment</a>
        </div>
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
                            <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50" />
                        </td>
                        <td>
                            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <!--<a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a> -->
                            <form method="POST" class="d-inline" action="products/{{ $product->id }}/delete">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
                
                <h1>Apartments List</h1>
            </table>
            {{$products->links('pagination::bootstrap-5')}}
    </div>
@endsection