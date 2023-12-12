@extends('layouts.app')
@section('main')

<style>
        body {
            background-image: url("{{ asset('record1.jpg') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }
        h1 {
            text-align: center;
            margin-top: 15px; /* Adjust the margin-top as needed */
        }
</style>
<h1>Add Apartment</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name"
                             class="form-control"
                             value="{{old('name')}}" 
                             />
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location"
                             class="form-control"
                             value="{{old('location')}}" 
                             />
                            @if($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location')}}</span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Price(BDT)</label>
                            <input type="number" name="price"
                             class="form-control"
                             value="{{old('price')}}" 
                             />
                            @if($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Area(sqrt)</label>
                            <input type="number" name="area"
                             class="form-control"
                             value="{{old('area')}}" 
                             />
                            @if($errors->has('area'))
                                <span class="text-danger">{{ $errors->first('area')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Beds(No.)</label>
                            <input type="number" name="beds"
                             class="form-control"
                             value="{{old('beds')}}" 
                             />
                            @if($errors->has('beds'))
                                <span class="text-danger">{{ $errors->first('beds')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description">{{
                                old('description')}}</textarea> 
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="image" class="form-control"/>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image')}}</span>
                            @endif

                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection