<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GET_AdminAddController extends Controller
{
    //

    function GET_AddVéhicule(){

    	return view('Operations/Vehicules');
    }
}
