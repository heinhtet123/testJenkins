<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(Request $request)
    {
    	return response()->json(['name'=>"ko khin aka khin myint lwin ool","address"=>"no.1","mobileno"=>"123567886565","status"=>"authentic"]);
    }
    
}
