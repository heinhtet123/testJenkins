<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(Request $request)
    {
    	return "Hello From the other side";
    }
    
}
