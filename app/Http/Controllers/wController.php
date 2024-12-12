<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
