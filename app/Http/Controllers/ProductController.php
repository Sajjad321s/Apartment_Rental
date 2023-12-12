<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        return view('products.index',['products'=>Product::latest()->paginate(5)]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        //validate data
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'price'=>'required',
            'area'=>'required',
            'beds'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        //upload images
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        $product = new Product;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->location=$request->location;
        $product->price=$request->price;
        $product->area=$request->area;
        $product->beds=$request->beds;
        $product->description=$request->description;
        $product->save();
        return back()->withSuccess('Apartment Listed !!!!');
    }
    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request,$id){
        //validate data
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'price'=>'required',
            'area'=>'required',
            'beds'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $product=Product::where('id',$id)->first();
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image=$imageName;
        }
        //upload images
        
        
        $product->name=$request->name;
        $product->location=$request->location;
        $product->price=$request->price;
        $product->area=$request->area;
        $product->beds=$request->beds;
        $product->description=$request->description;
        $product->save();
        return back()->withSuccess('Apartment Info Updated !!!!');
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Apartment Info Deleted !!!!');
    }
    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
    public function show1($id){
        $product=Product::where('id',$id)->first();
        return view('products.show1',['product'=>$product]);
    }
    public function index1(Request $request){

        $location = $request->input('location');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $beds = $request->input('beds');

        // Start with a base query for all apartments
        $query = Product::query();

        // Apply filters based on user input
        if ($location) {
            $query->where('location', 'LIKE', "%$location%");
        }

        if ($minPrice && $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if ($beds) {
            $query->where('beds', $beds);
        }


        // Get the filtered apartments
        $products = $query->paginate(5);

        // Pass the filtered apartments to the view
        return view('products.index1', compact('products','location','minPrice','maxPrice','beds'));
    }
}
