<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;
use App\Users;

class UsersController extends Controller
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
        $users=Users::all();
        $da=['users'=>$users];
        return view('users/index')->with($da);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users/create');
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
            'email'=>'required',
            'password'=>'required',
        ];
 
        $pesan=[
            'name.required'=>'Nama Admin Tidak Boleh Kosong',
            'email.required'=>'Email Tidak Boleh Kosong',
            'password.required'=>'Password Tidak Boleh Kosong',

        ];
 
        $validator=Validator::make(Input::all(),$rules,$pesan);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('users/create')
            ->withErrors($validator);
 
        }else{

            $users=new Users;
            $users->name=Input::get('name');
            $users->email=Input::get('email');
            $users->password=Input::get('password');

            $users->save();
 
            Session::flash('message','Users Stored');
 
            return Redirect::to('users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_users)
    {
        //
        $users=Users::find($id_users);

        $d=['users'=>$users];
        return view('users/edit')->with($d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_users)
    {
        //
        $rules =[
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ];
     
            $pesan=[
                'name.required'=>'Nama Admin Tidak Boleh Kosong',
                'email.required'=>'Email Tidak Boleh Kosong',
                'password.required'=>'Password Tidak Boleh Kosong',
            ];
    
            $validator=Validator::make(Input::all(),$rules,$pesan);
    
            if ($validator->fails()) {
                return Redirect::to('users/'.$id_users.'/edit')
                ->withErrors($validator);
    
            }else{
    
                $users=\App\Users::find($id_users);
    
               
                $users->name=Input::get('name');
                $users->email=Input::get('email');
                $users->password=Input::get('password');
             
                $users->save();
                Session::flash('message','Data Admin Berhasil Diubah');
                return Redirect::to('users');
            
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_users)
    {
        //
        $users=Users::find($id_users);
        $users->delete();

        Session::flash('message','Barang Dihapus');
        return Redirect::to('users');
    }

    public function search()
    {
        $q = Input::get ( 'q' );
        $users = \App\Users::where('name','LIKE','%'.$q.'%')
                            ->orWhere('email','LIKE','%'.$q.'%')
                            ->orWhere('password','LIKE','%'.$q.'%')
                            ->get();
        if(count($users) > 0)
            return view('users/index')
                ->withUsers($users)
                ->withQuery ( $q );
        else 
            return view ('users/index')
                ->withMessage('No Details found. Try to search again !');
    }
}
