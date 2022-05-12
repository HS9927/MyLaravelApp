<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index ()
    {
        $var = env("myname");

        return view("welcome")->with("var", $var);
    }
}
