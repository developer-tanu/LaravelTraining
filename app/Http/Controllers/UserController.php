<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;


class UserController extends Controller
{
//    function index()
//    {
//        echo"hello from usercontroller";
//    }
   //   function index($user)
   //   {   
   //      //  return view('user');
   //      return $user;
   //   }
   function index()
   {
      $blog=Blog::all();
      return $blogs
   }
}
