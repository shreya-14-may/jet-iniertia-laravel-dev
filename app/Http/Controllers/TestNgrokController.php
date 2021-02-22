<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use HelloSign\Client as HelloClient;
use HelloSign\Account as HelloAccount;

class TestNgrokController extends Controller
{
    public function formindex(Request $request){

        // $client = new HelloClient(config('app.hellosign_api_key'));
        $client = new HelloClient('411e7d3b2229870b6218ec889fc07fcab388f738a690f8172803e2607d3bab69');
    
        $account = new HelloAccount;

        // $account->setCallbackUrl('https://c4b01d959930.ngrok.io/api/hellosign-callback');
        $response = $client->updateAccount($account);

        return  $account ;
    }
}


