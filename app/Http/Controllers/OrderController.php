<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Google\Cloud\Firestore\FirestoreClient;
use App\Order;
use Redirect;
use Session;
use DB;

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
        $order =Order::select('order.id_order','customer.name','customer.email','customer.no_phone','address.address','order.total_payment','order.date_order','order.status')
              ->join('address','order.id_address','=', 'address.id_address')
              ->join('customer','order.id_customer', '=','customer.id_customer')
              ->get();

            //ambil data orders
            $db = new FirestoreClient([
                'projectId' => 'cgmarketplace-a8727'
            ]);
                $docRef = $db->collection('Orders');
                $query = $docRef->where('flex', '=', true); //ini buat indeks udah diambil belum
                $documents = $query->documents();
                    foreach ($documents as $document) {
                    if ($document->exists()) {
                printf('Document data for document %s:' . PHP_EOL, $document->id());
                $data = $document->data();
                $document = $data['totalOrder'];
                
                $id = $document->id();
                //terus flex diubah ke false biar ga ke ambil lagi
                $updateRef = $db->collection('Orders')->document($id);
                $updateRef->update([
                ['path' => 'flex', 'value' => false]
                ]);
        }
    }
        return view('order.index', compact('order'));
    }

   
 
    public function detail($id_order)
    {
        //
        $detail =Order::select('order.*','detail.*','product.*')
                ->join('detail', 'order.id_order', '=', 'detail.id_order')
                ->join('product', 'product.id_product', '=', 'detail.id_product')
                ->where('order.id_order',$id_order)
                ->get();
        $customer =Order::select('order.*','customer.*','address.*')
                ->join('customer','order.id_customer', '=','customer.id_customer')
                ->join('address','order.id_address','=', 'address.id_address')
                ->where('order.id_order',$id_order)
                ->first();
        return view('detail.index', compact('detail','customer'));        
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
