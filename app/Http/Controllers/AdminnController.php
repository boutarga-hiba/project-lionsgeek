<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminnController extends Controller
{
    //& la fonction de home de l admin

    public function index()
    {
        return view("home");
    }
}
