<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use APP\Product;
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
            'image1File'=>'required|mimes:jpg,png,jpeg,JPG',
            'image2File'=>'required|mimes:jpg,png,jpeg,JPG',
            'image3File'=>'required|mimes:jpg,png,jpeg,JPG',
            'name_product'=>'required',
            'code_product'=>'required|integer',
            'category'=>'required',
            'material'=>'required',
            'finish'=>'required',
            'width'=>'required',
            'height'=>'required',
            'dense'=>'required',
            'price'=>'required',
            'stock'=>'required|integer',
            'detail1'=>'required', 
            'detail2'=>'required',
            'detail3'=>'required',
            'description'=>'required',
        ];
 
        $pesan=[
            'image1File.required'=>'Gambar Tidak Boleh Kosong',
            'image2File.required'=>'Gambar Tidak Boleh Kosong',
            'image3File.required'=>'Gambar Tidak Boleh Kosong',
            'code_product.required'=>'Tidak Boleh Kosong',
            'name_product.required'=>'Nama Barang Tidak Boleh Kosong',
            'category.required'=>'Tidak Boleh Kosong',
            'material.required'=>'Material Tidak Boleh Kosong',
            'finish.required'=>'Finish Tidak Boleh Kosong',
            'width.required'=>'Width Tidak Boleh Kosong',
            'height.required'=>'Height Tidak Boleh Kosong',
            'price.required'=>'Harga Barang Tidak Boleh Kosong',
            'dense.required'=>'Dense Tidak Boleh Kosong',
            'stock.required'=>'Tidak Boleh Kosong',
            'detail1.required'=>'Detail Tidak Boleh Kosong',
            'detail2.required'=>'Detail Tidak Boleh Kosong',
            'detail3.required'=>'Detail Tidak Boleh Kosong',
            'description.required'=>'Deskripsi Barang Tidak Boleh Kosong',
        ];
 
        $validator=Validator::make(Input::all(),$rules,$pesan);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('product/create')
            ->withErrors($validator);
 
        }else{
 
            $image1=$request->file('image1File')->store('productImages','public');
            $image2=$request->file('image2File')->store('productImages','public');
            $image3=$request->file('image3File')->store('productImages','public');
             
            $product=new \App\Product;
            $product->image1=$image1;
            $product->image2=$image2;
            $product->image3=$image3;
            $product->code_product=Input::get('code_product');
            $product->name_product=Input::get('name_product');
            $product->category=Input::get('category');
            $product->material=Input::get('material');
            $product->finish=Input::get('finish');
            $product->width=Input::get('width');
            $product->height=Input::get('height');
            $product->dense=Input::get('dense');
            $product->price=Input::get('price');
            $product->stock=Input::get('stock');
            $product->detail1=Input::get('detail1');
            $product->detail2=Input::get('detail2');
            $product->detail3=Input::get('detail3');
            $product->description=Input::get('description');
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
        $da=['product'=>$product];
        return view('product/show')->with($da);
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

        $d=['product'=>$product];
        return view('product/edit')->with($d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
            //
            $rules =[
                'image1File'=>'required|mimes:jpg,png,jpeg,JPG',
                'image2File'=>'required|mimes:jpg,png,jpeg,JPG',
                'image3File'=>'required|mimes:jpg,png,jpeg,JPG',
                'name_product'=>'required',
                'description'=>'required',
                'material'=>'required',
                'finish'=>'required',
                'width'=>'required',
                'height'=>'required',
                'dense'=>'required',
                'detail1'=>'required',
                'detail2'=>'required',
                'detail3'=>'required',
                'price'=>'required',
                'category'=>'required',
                'code_product'=>'required|integer',
                'stock'=>'required|integer',
            ];
     
            $pesan=[
                'image1File.required'=>'Gambar Tidak Boleh Kosong',
                'image2File.required'=>'Gambar Tidak Boleh Kosong',
                'image3File.required'=>'Gambar Tidak Boleh Kosong',
                'name_product.required'=>'Nama Barang Tidak Boleh Kosong',
                'description.required'=>'Deskripsi Barang Tidak Boleh Kosong',
                'material.required'=>'Material Tidak Boleh Kosong',
                'finish.required'=>'Finish Tidak Boleh Kosong',
                'width.required'=>'Width Tidak Boleh Kosong',
                'height.required'=>'Height Tidak Boleh Kosong',
                'dense.required'=>'Dense Tidak Boleh Kosong',
                'detail1.required'=>'Detail Tidak Boleh Kosong',
                'detail2.required'=>'Detail Tidak Boleh Kosong',
                'detail3.required'=>'Detail Tidak Boleh Kosong',
                'price.required'=>'Harga Barang Tidak Boleh Kosong',
                'category.required'=>'Tidak Boleh Kosong',
                'code_product.required'=>'Tidak Boleh Kosong',
                'stock.required'=>'Tidak Boleh Kosong',
    
            ];
    
            $validator=Validator::make(Input::all(),$rules,$pesan);
    
            if ($validator->fails()) {
                return Redirect::to('product/'.$id_product.'/edit')
                ->withErrors($validator);
    
            }else{
    
                $image1="";
    
                if (!$request->file('image1File')) {
                    
                    $image1=Input::get('image1Path');
                }else{
                    $image1=$request->file('image1File')->store('productImages','public');                
                
                    $image2="";
    
                if (!$request->file('image2File')) {
                    
                    $image2=Input::get('image2Path');
                }else{
                    $image2=$request->file('image2File')->store('productImages','public');                
               
                    $image3="";
    
                if (!$request->file('image3File')) {
                    
                    $image3=Input::get('image3Path');
                }else{
                    $image3=$request->file('image3File')->store('productImages','public');                
                }
            
    
                $product=\App\Product::find($id_product);
    
                $product->image1=$image1;
                $product->image2=$image2;
                $product->image3=$image3;
                $product->name_product=Input::get('name_product');
                $product->description=Input::get('description');
                $product->material=Input::get('material');
                $product->finish=Input::get('finish');
                $product->width=Input::get('width');
                $product->height=Input::get('height');
                $product->dense=Input::get('dense');
                $product->detail1=Input::get('detail1');
                $product->detail2=Input::get('detail2');
                $product->detail3=Input::get('detail3');
                $product->price=Input::get('price');
                $product->category=Input::get('category');
                $product->code_product=Input::get('code_product');
                $product->stock=Input::get('stock');
                $product->save();
                Session::flash('message','Product Edited ');
                return Redirect::to('product');
            
    }
}
}}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
        //
        $product=\App\Product::find($id_product);
        $product->delete();
        Session::flash('message','Product Deleted');
        return Redirect::to('product');
    }

}
    
