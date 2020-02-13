<?php

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
}
