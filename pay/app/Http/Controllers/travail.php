<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travail extends Controller
{
    public function index(){
        return view('html.service');
    }
}
