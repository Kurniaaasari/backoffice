<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use DB;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('order')
              ->join('address','order.id_address','=', 'address.id_address')
              ->join('customer','order.id_customer', '=','customer.id_customer')
              ->select('order.id_order','customer.name','customer.email','customer.no_phone','address.address','order.total_payment','order.date_order','order.status')
              ->get();
        return view('order.index', compact('data'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search()
    {

    $q = Input::get ( 'q' );
    $data = Order::join('customer', 'order.id_customer', '=', 'customer.id_customer' )
                   ->join('address', 'order.id_address', '=', 'address.id_address' ) 
                    ->where('total_payment','LIKE','%'.$q.'%')
                    ->orWhere('date_order','LIKE','%'.$q.'%')
                    ->orWhere('status','LIKE','%'.$q.'%')
                    ->orwhere('name','LIKE','%'.$q.'%')
                    ->orWhere('email','LIKE','%'.$q.'%')
                    ->orWhere('no_phone','LIKE','%'.$q.'%')
                    ->orWhere('address.address','LIKE','%'.$q.'%') 
                    ->get();
    if(count($data) > 0)
        return view('order/index')
                ->withData($data)->withQuery ( $q );
    else 
        return view ('order/index')->withMessage('No Details found. Try to search again !');
    }
}
