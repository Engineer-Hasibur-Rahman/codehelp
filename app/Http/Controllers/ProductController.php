<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //product show
    public function allshowProduct(){
        

        return view('backend.product.show-product');
    }
    
    //product data
    public function dataProduct(){

        return Product::all();
    }

    //product store
    public function storeProduct(Request $request){

        Product::create($request)->all();

        return ['success'=>true, 'message'=>'Add Successfully'];
    }
    
    //product update
    public function updateProduct(Request $request){
        if($request->has('id')){            
            Product::find($id->input('id'))->update($request->all());
            return ['success'=>true, 'message'=>'Update add successfully'];    
        }
    }    
    //product delete
    public function deleteProduct(Request $request){
        if($request->has('id')){
            Product::find($id->input('id'))->delete($request->all());
            
        }
    }
}
