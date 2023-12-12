@extends('layouts.app1')
@section('main')

<style>
    body {
            background-image: url("{{ asset('show1.avif') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }

    .container {
        margin-top: 30px; /* Adjust the margin-top as needed */
        
    }

    h1 {
        text-align: center;
        margin-bottom: 10px; /* Add some spacing below the heading */
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
    }

    .card p {
        margin-bottom: 10px;
        
    }

    .card img {
        display: block;
        margin: 0 auto; /* Center the image within the card */
        margin-top: 20px; /* Add spacing above the image */
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

<div class="container">
    <h1>Apartment Details</h1>

    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Location:</strong> {{ $product->location }}</p>
                <p><strong>Price(BDT):</strong> {{ $product->price }}</p>
                <p><strong>Area(sqrt):</strong> {{ $product->area }}</p>
                <p><strong>Beds(No.):</strong> {{ $product->beds }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <img src="/products/{{ $product->image }}" class="rounded" width="50%" alt="{{ $product->name }} Image"/>
            </div>
        </div>
    </div>
</div>

@endsection
