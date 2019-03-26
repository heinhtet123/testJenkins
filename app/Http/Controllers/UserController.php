<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(Request $request)
    {
    	return response()->json(['name'=>"hein htet","address"=>"no.1","mobileno"=>"456","status"=>"authentic"]);
    }
    
}
