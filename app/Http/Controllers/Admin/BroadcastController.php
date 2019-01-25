<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\ServerEvent;

class BroadcastController extends Controller
{

    public function broadcast(Request $request)
    {

	    $token = $request->token;

	    $data = $request->data;

		broadcast(new ServerEvent($data, $token))->toOthers();

		return response(['success'], 200);

    }

}
