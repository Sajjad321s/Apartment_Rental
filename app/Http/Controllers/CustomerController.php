<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;

class CustomerController extends Controller
{
    public function show2($id){
        $product=Product::where('id',$id)->first();
        return view('customers.show2',['product'=>$product]);
    }
    public function store2(Request $request){
        //validate data
        $request->validate([
            'apartment_name'=>'required',
            'apartment_id'=>'required',
            'customer_name'=>'required',
            'price'=>'required',
            'profession'=>'required',
            'address'=>'required',
            'phone_no'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
            'agree' => 'required',
            
        ]);
        //upload images
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('customers'),$imageName);
    
        $customer = new Customer();
        $customer->image=$imageName;
        $customer->apartment_name=$request->apartment_name;
        $customer->apartment_id=$request->apartment_id;
        $customer->customer_name=$request->customer_name;
        $customer->price=$request->price;
        $customer->profession=$request->profession;
        $customer->address=$request->address;
        $customer->phone_no=$request->phone_no;
        $customer->agree=$request->agree;
        $customer->save();
        //return back()->withSuccess('Contract Submitted !!!!');
        return redirect()->route('checkout', [
            'productname' => $customer->apartment_name,
            'total' => $customer->price, // Replace with your actual pricing logic
        ]);
    }

    public function index2(){

        return view('customers.index2',['customers'=>Customer::latest()->paginate(5)]);
    }
}
