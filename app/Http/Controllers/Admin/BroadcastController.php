<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\ServerEvent;

class BroadcastController extends Controller
{

    public function broadcast(Request $request, $token)
    {

		broadcast(new ServerEvent($request->all(), $token))->toOthers();

		return response(['success'], 200);

    }

}
