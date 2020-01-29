<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $customer=\App\Customer::all();
        $da=['customer'=>$customer];
        return view('customer/index')->with($da);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer/create');
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
        $rules =[
            'name'=>'required',
            'address'=>'required',
            'no_phone'=>'required',
            'email'=>'required',
            'password'=>'required',
        ];
 
        $pesan=[
            'name.required'=>'Nama Customer Tidak Boleh Kosong',
            'address.required'=>'Address Customer Tidak Boleh Kosong',
            'no_phone.required'=>'Phone Number Tidak Boleh Kosong',
            'email.required'=>'Email Tidak Boleh Kosong',
            'password.required'=>'Password Tidak Boleh Kosong',

        ];
 
        $validator=Validator::make(Input::all(),$rules,$pesan);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('customer/create')
            ->withErrors($validator);
 
        }else{

            $customer=new \App\Customer;
            $customer->name=Input::get('name');
            $customer->address=Input::get('address');
            $customer->no_phone=Input::get('no_phone');
            $customer->email=Input::get('email');
            $customer->password=Input::get('password');

            $customer->save();
 
            Session::flash('message','Customer Stored');
 
            return Redirect::to('customer');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_customer)
    {
      
    }

    /**
  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_customer)
    {
        //
        $customer=\App\Customer::find($id_customer);

        $d=['customer'=>$customer];
        return view('customer/edit')->with($d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_customer)
    {
            //
            $rules =[
                'name'=>'required',
                'address'=>'required',
                'no_phone'=>'required',
                'email'=>'required',
                'password'=>'required',
            ];
     
            $pesan=[
                'name.required'=>'Nama Customer Tidak Boleh Kosong',
                'address.required'=>'Address Customer Tidak Boleh Kosong',
                'no_phone.required'=>'Phone Number Tidak Boleh Kosong',
                'email.required'=>'Email Tidak Boleh Kosong',
                'password.required'=>'Password Tidak Boleh Kosong',
            ];
    
            $validator=Validator::make(Input::all(),$rules,$pesan);
    
            if ($validator->fails()) {
                return Redirect::to('customer/'.$id_customer.'/edit')
                ->withErrors($validator);
    
            }else{
    
                $customer=\App\Customer::find($id_customer);
    
               
                $customer->name=Input::get('name');
                $customer->address=Input::get('address');
                $customer->no_phone=Input::get('no_phone');
                $customer->email=Input::get('email');
                $customer->password=Input::get('password');
             
                $customer->save();
                Session::flash('message','Data Customer Berhasil Diubah');
                return Redirect::to('customer');
            
    }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_customer)
    {
        //
        $customer=\App\Customer::find($id_customer);
        $customer->delete();

        Session::flash('message','Barang Dihapus');
        return Redirect::to('customer');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get('search');
        $q = DB::table('customer')->where('name','like','%'.$search.'%')->paginate(5);
        return view('search',['search'=>$q]);
   
}
      
}
