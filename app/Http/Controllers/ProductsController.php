<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function indexProduct()
    {
        $data = DB::table("products")->get();
        return view('product.indexProduct',['products'=>$data]);
    }
    
    public function deleteProduct($id){
        $delete = DB::table("products")
        ->where("id", "=" , $id)
        ->delete();
        return redirect('/')->with('success', 'MAY NAMAALAM NA CUSTOMER');
    }
    public function editProduct($id){
        $data=Product::findOrFail($id);
        return view('product.editProduct', ['product' => $data]);

    }

    public function updateProduct(Request $request){
        $request->validate([
            "description"=>['required' , 'min:4'],
            "quantity"=>['required' , 'min:4'],
            "price"=>['required','min:11']
        ]);

        $data = Product::find($request->id);
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->price=$request->price;
        
        $data->save();
        return redirect("/products")->with('success2', 'Customer Saved');
    }

    public function saveProduct(Request $req){
        $validated=$req->validate([
            "description"=>['required' , 'min:4'],
            "quantity"=>['required' , 'min:4'],
            "price"=>['required','min:11']
        ]);
        $data=Product::create($validated);
        return redirect("/products")->with('success2', 'Customer added successfully.');

    }
    public function addProduct(){

        return view('product.addProduct');

    }
}
