<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use DB;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('wishlist')
              ->join('product','wishlist.id_product','=', 'product.id_product')
              ->join('customer','wishlist.id_customer', '=','customer.id_customer')
              ->select('wishlist.id_wishlist','customer.name','product.name_product','product.material','product.finish','product.price')
              ->get();
        return view('wishlist.index', compact('data'));
    }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
        
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
         
     }

     public function search()
    {

    $q = Input::get ( 'q' );
    $data = Payment::join('product', 'product.id_product', '=', 'wishlist.id_product' )
                    ->join('customer', 'customer.id_customer', '=', 'wishlist.id_customer' )
                    ->where('id_wishlist','LIKE','%'.$q.'%')
                    ->orWhere('customer.name','LIKE','%'.$q.'%')
                    ->orWhere('name_product','LIKE','%'.$q.'%')
                    ->orwhere('material','LIKE','%'.$q.'%')
                    ->orWhere('finish','LIKE','%'.$q.'%')
                    ->orWhere('product.price','LIKE','%'.$q.'%')
                    ->get();
    if(count($data) > 0)
        return view('wishlist/index')
                ->withData($data)->withQuery ( $q );
    else 
        return view ('wishlist/index')->withMessage('No Details found. Try to search again !');
    }
}

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
