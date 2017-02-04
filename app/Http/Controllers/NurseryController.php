<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseryController extends Controller
{
    public function show(){
      return view('nursery.index');
    }
}
