<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;

class FirebaseController extends Controller
{
    function initialize()
{
    // Create the Cloud Firestore client
    $db = new FirestoreClient([
        'projectId' => 'cgmarketplace-a872'
    ]);

    $docRef = $db->collection('tes')->document('tess');
    $docRef->set([
    'first' => 'Ada',
    'last' => 'Lovelace',
    'born' => 1815
]);
printf('Added data to the lovelace document in the users collection.' . PHP_EOL);
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
}
=======
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
 
 
class FirebaseController extends Controller
{
    // -------------------- [ Insert Data ] ------------------
    public function index() {
 
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://laravel6firebase.firebaseio.com/')
        ->create();
 
        $database   =   $firebase->getDatabase();
 
        $createPost    =   $database
 
        ->getReference('App/Product')
        ->push([
            $product=\App\Product::all()
            
            // 'title' =>  'Laravel 6',
            // 'body'  =>  'This is really a cool database that is managed in real time.'
 
        ]);
             
        echo '<pre>';
        print_r($createPost->getvalue());
        echo '</pre>';
 
    }
 
    // --------------- [ Listing Data ] ------------------
    public function getData() {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://laravel6firebase.firebaseio.com/')
        ->create();
 
        $database   =   $firebase->getDatabase();
        $createPost    =   $database->getReference('blog/posts')->getvalue();      
        return response()->json($createPost);
    }
>>>>>>> master
}
