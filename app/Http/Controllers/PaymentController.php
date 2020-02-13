<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('payment')
              ->join('order','order.id_order','=', 'payment.id_order')
              ->select('payment.id_payment','payment.payment_confirm','payment.created_at','order.date_order','order.total_payment')
              ->get();     
              return view('payment.index', compact('data'));
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
    $data = Payment::join('order', 'order.id_order', '=', 'payment.id_order' )
                    ->where('id_payment','LIKE','%'.$q.'%')
                    ->orWhere('payment_confirm','LIKE','%'.$q.'%')
                    ->orWhere('payment.created_at','LIKE','%'.$q.'%')
                    ->orwhere('order.date_order','LIKE','%'.$q.'%')
                    ->orWhere('total_payment','LIKE','%'.$q.'%')
                    ->get();
    if(count($data) > 0)
        return view('payment/index')
                ->withData($data)->withQuery ( $q );
    else 
        return view ('payment/index')->withMessage('No Details found. Try to search again !');
    }
}
