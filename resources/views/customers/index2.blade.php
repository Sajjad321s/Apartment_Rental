@extends('layouts.app')
@section('main')
    <style>

        th, td {
            
            text-align: center;
        }
        body {
            background-image: url("{{ asset('record1.jpg') }}");
            background-size: cover;
            background-color: #dfe9f5;
            
        }
        thead {
            background-color: #72A0C1; /* Dark ash color */
        }
    </style>
    <div class="container">
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Apartment Name</th>
                        <th>Apartment ID</th>
                        <th>Tenant Name</th>
                        <th>Price</th>
                        <th>Profession</th>
                        <th>Address</th>
                        <th>Phone No.</th>
                        <th>Agreement Status</th>
                        <th>NID</th>
                        
                        
                    </tr>
                </thead>
                <cente>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $customer->apartment_name}} </td>
                        <td>{{ $customer->apartment_id }} </td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->price }}</td>
                        <td>{{ $customer->profession }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone_no }}</td>
                        <td>{{ $customer->agree }}</td>
                        <td>
                            <img src="customers/{{ $customer->image }}" class="rounded-circle" width="50" height="50" />
                        </td>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
                
                
                <h1>Records</h1>
            </table>
            {{$customers->links('pagination::bootstrap-5')}}
    </div>
@endsection