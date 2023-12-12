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

<div class="container">
        <div class="row justify-content-center">
            <h1>Contract Form</h1>
        </div>
</div>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="{{route('customers.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Apartment Name (Readonly) -->
                        <div class="form-group">
                            <label><strong>Apartment name</strong></label>
                            <input type="text" name="apartment_name" class="form-control" value="{{ $product->name }}" readonly>
                            @if ($errors->has('apartment_name'))
                                <span class="text-danger">{{ $errors->first('apartment_name') }}</span>
                            @endif
                        </div>

                        <!-- Apartment ID (Readonly) -->
                        <div class="form-group">
                            <label><strong>Apartment ID</strong></label>
                            <input type="number" name="apartment_id" class="form-control" value="{{ $product->id }}" readonly>
                            @if ($errors->has('apartment_id'))
                                <span class="text-danger">{{ $errors->first('apartment_id') }}</span>
                            @endif
                        </div>

                        <!-- Customer Name (Readonly) -->
                        <div class="form-group">
                            <label><strong>Tenant Name</strong></label>
                            <input type="text" name="customer_name" placeholder="Type Your Name" class="form-control" value="{{ Auth::user()->name }}" readonly>
                            @if ($errors->has('customer_name'))
                                <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                            @endif
                        </div>
                        <!-- Price (Readonly) -->
                        <div class="form-group">
                            <label><strong>Price Amount</strong></label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}" readonly>
                            @if ($errors->has('apartment_id'))
                                <span class="text-danger">{{ $errors->first('apartment_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label><strong>Profession</strong></label>
                            <input type="text" name="profession" placeholder="Type Your Profession"
                             class="form-control"
                             value="{{old('profession')}}" 
                             />
                            @if($errors->has('profession'))
                                <span class="text-danger">{{ $errors->first('profession')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label><strong>Present Address</strong></label>
                            <input type="text" name="address" placeholder="Type Your Current Address"
                             class="form-control"
                             value="{{old('address')}}" 
                             />
                            @if($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label><strong>Phone Number</strong></label>
                            <input type="number" name="phone_no" placeholder="Type Your Phone Number"
                             class="form-control"
                             value="{{old('phone_no')}}" 
                             />
                            @if($errors->has('phone_no'))
                                <span class="text-danger">{{ $errors->first('phone_no')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label><strong>NID Photo (Upload Your NID Photo)</strong></label>
                            <input type="file" name="image" class="form-control"/>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image')}}</span>
                            @endif

                        </div>
                        <!-- Terms & Conditions -->
                    <p><strong>Terms & Conditions</strong></p>
                    <ul>
                        <li>Tenant is responsible for payment of utilities such as electricity, water, gas, and internet during the rental period.</li>
                        <li>The security deposit will be held as security against damages, unpaid rent, and any breach of terms.</li>
                        <li>Either party may terminate this agreement by providing 60 days' written notice. The security deposit may be used to cover unpaid rent or damages in accordance with local laws.</li>
                        <li>The landlord or their authorized representative may enter the property for inspections, repairs, and maintenance, with prior notice to the tenant.</li>
                    </ul>
                          
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="agree" name="agree" value="1" required>
                            <label class="form-check-label" for="agree" style="color: red;">I agree to the Terms and Conditions and proceed to payment.</label>
                            @if($errors->has('agree'))
                                <span class="text-danger">{{ $errors->first('agree') }}</span>
                            @endif
                        </div> 
                        <button type="submit" class="btn btn-dark">Advance</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>


       
        
    </div>        
@endsection