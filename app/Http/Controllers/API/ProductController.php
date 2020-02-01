<?php

namespace App\Http\Controllers\API;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ProductController extends Controller
{
    public function index(Product $product){
        try{
            $product =\App\Product::all();
            if(!$product){
                return response()->json([
                    'product'   =>array(), 
                    'status'    =>'error',
                    'message'   =>'Nothing Happen',
                    'code'      =>'404'], 404);
            }
            return response()->json([
                'product'   =>$product, 
                'status'    =>'success',
                'message'   =>'Get data success',
                'code'      =>'200'], 200);
        }
        catch(\Exception $d){
            return response()->json([
                'product'   =>array(), 
                'status'    =>'error',
                'message'   =>$d->getMessage(),
                'code'      =>'404'], 404);
        }
    }
}

