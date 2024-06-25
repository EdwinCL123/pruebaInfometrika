<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAll extends Controller
{
    
    public function show(){

        return view('index');

    }

    public function newPrestamo(){

        return view('newPrestamo');

    }
}
