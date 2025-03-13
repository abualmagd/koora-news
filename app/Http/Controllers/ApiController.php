<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    //

    public function data(){
             return Response()->json("hello laravel api", 200);
    }
}
