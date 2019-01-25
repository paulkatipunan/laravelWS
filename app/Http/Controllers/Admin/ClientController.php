<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    
    public function create ()
    {

    	return view('clients.create');

    }

    public function save (Request $request)
    {	
    	$randSTR = str_random(32);

    	$client = new Client;
    	$client->name = request('name');
    	$client->token = $randSTR;
    	$client->save();
    	return $client;

    }


}
