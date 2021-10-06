<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class TestController extends Controller
{
    //
    Public function viewTest()
     $data=Personal::all();
     return view('form')
}
