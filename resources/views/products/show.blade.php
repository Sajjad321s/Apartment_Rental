@extends('layouts.app')
@section('main')
<style>
        body {
            background-image: url("{{ asset('record1.jpg') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }
        .card{
            background-color: #F0F8FF;
        }
        h1 {
            text-align: left;
            margin-top: 15px; /* Adjust the margin-top as needed */
            margin-left: 25px;
        }
        
    </style>
<h1>Apartment Details</h1>
<div class="container"></div>
    <div class="row justify-content-center"></div>
        <div class="col-sm-8 mt-4">
            <div class="card p-4 ">
                <p>Name : <b>{{ $product->name }}</b></p>
                <p>Location : <b>{{ $product->location }}</b></p>
                <p>Price(BDT) : <b>{{ $product->price }}</b></p>
                <p>Area(sqrt) : <b>{{ $product->area }}</b></p>
                <p>Beds(No.) : <b>{{ $product->beds }}</b></p>
                <p>Description : <b>{{ $product->description }}</b></p>
                <img src="/products/{{ $product->image }}" class="rounded" width="100%"/>
            </div>
        </div>
@endsection