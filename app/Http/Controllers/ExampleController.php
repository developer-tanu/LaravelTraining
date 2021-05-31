<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function myFun($eg)
    {
        return  $eg; 
    //   echo"hello from exampleController"; 
    }
}
