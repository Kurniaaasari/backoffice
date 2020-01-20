<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class ProductController extends Controller
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
        $product=\App\Product::all();
        $data=['product'=>$product];
        return view('product/index')->with($data);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product/create');
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
            'imageFile'=>'required|mimes:jpg,png,jpeg,JPG',
            'name_product'=>'required',
            'description'=>'required',
            'dimension'=>'required',
            'fabric'=>'required',
            'finish'=>'required',
            'price'=>'required|integer',
            'id_category'=>'required|integer',
            'code_product'=>'required|integer',
            'stock'=>'required|integer',
        ];
 
        $pesan=[
            'imageFile.required'=>'Gambar Tidak Boleh Kosong',
            'name_product.required'=>'Nama Barang Tidak Boleh Kosong',
            'description.required'=>'Deskripsi Barang Tidak Boleh Kosong',
            'fabric.required'=>'Fabric Tidak Boleh Kosong',
            'finish.required'=>'Finish Tidak Boleh Kosong',
            'price.required'=>'Harga Barang Tidak Boleh Kosong',
            'id_category.required'=>'Tidak Boleh Kosong',
            'code_product.required'=>'Tidak Boleh Kosong',
            'stock.required'=>'Tidak Boleh Kosong',

        ];
 
        $validator=Validator::make(Input::all(),$rules,$pesan);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('product/create')
            ->withErrors($validator);
 
        }else{
 
            $image=$request->file('imageFile')->store('productImages','public');
             
            $product=new \App\Product;
 
            $product->image=$image;
            $product->name_product=Input::get('name_product');
            $product->description=Input::get('description');
            $product->dimension=Input::get('dimension');
            $product->fabric=Input::get('fabric');
            $product->finish=Input::get('finish');
            $product->price=Input::get('price');
            $product->id_category=Input::get('id_category');
            $product->code_product=Input::get('code_product');
            $product->stock=Input::get('stock');
           
            $product->save();
 
            Session::flash('message','Product Stored');
 
            return Redirect::to('product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_product)
    {
        //
        $product=\App\Product::find($id_product);
<<<<<<< Updated upstream
        $da=['product'=>$product];
        return view('product/show')->with($da);
=======

        $da=['product'=>$product];
        return view('product/show')->with($da);

        $d=['product'=>$product];
      
        return view('product/show')->with($d);

>>>>>>> Stashed changes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //
        $product=\App\Product::find($id_product);
<<<<<<< Updated upstream
        $d=['product'=>$product];
        return view('product/edit')->with($d);
    }
=======

        $d=['product'=>$product];
        return view('product/edit')->with($d);
    

>>>>>>> Stashed changes

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
            //
            $rules =[
                'imageFile'=>'required|mimes:jpg,png,jpeg,JPG',
                'name_product'=>'required',
                'description'=>'required',
                'dimension'=>'required',
                'fabric'=>'required',
                'finish'=>'required',
                'price'=>'required|integer',
                'id_category'=>'required|integer',
                'code_product'=>'required|integer',
                'stock'=>'required|integer',
            ];
     
            $pesan=[
                'imageFile.required'=>'Gambar Tidak Boleh Kosong',
                'name_product.required'=>'Nama Barang Tidak Boleh Kosong',
                'description.required'=>'Deskripsi Barang Tidak Boleh Kosong',
                'fabric.required'=>'Fabric Tidak Boleh Kosong',
                'finish.required'=>'Finish Tidak Boleh Kosong',
                'price.required'=>'Harga Barang Tidak Boleh Kosong',
                'id_category.required'=>'Tidak Boleh Kosong',
                'code_product.required'=>'Tidak Boleh Kosong',
                'stock.required'=>'Tidak Boleh Kosong',
    
            ];
    
    
            $validator=Validator::make(Input::all(),$rules,$pesan);
    
            if ($validator->fails()) {
                return Redirect::to('product/'.$id_product.'/edit')
                ->withErrors($validator);
    
            }else{
    
                $image="";
    
                if (!$request->file('imageFile')) {
                    
                    $image=Input::get('imagePath');
                }else{
                    $image=$request->file('imageFile')->store('productImages','public');                
                }
    
                $product=\App\Product::find($id_product);
    
                $product->image=$image;
                $product->name_product=Input::get('name_product');
                $product->description=Input::get('description');
                $product->dimension=Input::get('dimension');
                $product->fabric=Input::get('fabric');
                $product->finish=Input::get('finish');
                $product->price=Input::get('price');
                $product->id_category=Input::get('id_category');
                $product->code_product=Input::get('code_product');
                $product->stock=Input::get('stock');
                $product->save();
    
                Session::flash('message','Data Barang Berhasil Diubah');
                
                return Redirect::to('product');
            }
<<<<<<< Updated upstream
    }
=======

         //
         $rules=[
            'imageFile'=>'required|mimes:jpg,png,jpeg,JPG',
            'name_product'=>'required',
            'description'=>'required',
            'dimension'=>'required',
            'fabric'=>'required',
            'finish'=>'required',
            'price'=>'required|integer',
            'id_category'=>'required|integer',
            'code_product'=>'required|integer',
            'stock'=>'required|integer',
        ];
 
        $pesan=[
            'imageFile.required'=>'Gambar Tidak Boleh Kosong',
            'name_product.required'=>'Nama Barang Tidak Boleh Kosong',
            'description.required'=>'Deskripsi Barang Tidak Boleh Kosong',
            'fabric.required'=>'Fabric Tidak Boleh Kosong',
            'finish.required'=>'Finish Tidak Boleh Kosong',
            'price.required'=>'Harga Barang Tidak Boleh Kosong',
            'id_category.required'=>'Tidak Boleh Kosong',
            'code_product.required'=>'Tidak Boleh Kosong',
            'stock.required'=>'Tidak Boleh Kosong',
        ];
 
 
        $validator=Validator::make(Input::all(),$rules,$pesan);
        //jika ada data yang kosong
        if ($validator->fails()) {
            return Redirect::to('product/product')
            ->withErrors($validator);
 
        }else{
            $image=$request->file('imageFile')->store('productImages','public');
             
            $product=new \App\Product;
 
            $product->image=$image;
            $product->name_product=Input::get('name_product');
            $product->description=Input::get('description');
            $product->dimension=Input::get('dimension');
            $product->fabric=Input::get('fabric');
            $product->finish=Input::get('finish');
            $product->price=Input::get('price');
            $product->id_category=Input::get('id_category');
            $product->code_product=Input::get('code_product');
            $product->stock=Input::get('stock');
            $product->save();
 
            Session::flash('message','Product Updated');
             
            return Redirect::to('product');


        }
    }



>>>>>>> Stashed changes

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    public function destroy($id_product)
    {
        //
        $product=\App\Product::find($id_product);
        $product->delete();

        Session::flash('message','Barang Dihapus');
        return Redirect::to('product');
    }

}
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
