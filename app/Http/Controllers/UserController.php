<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource
     * 
     * @return Response
     */
	public function create()
	{
		return view('register');
	}
}
