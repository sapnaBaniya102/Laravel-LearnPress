<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getsessiondata(Request $request){
if ($request->session()->has('email')) {
    # code...
    echo $request->session()->get('email');
}
else{
    echo 'no data in the session';
}
    }
}
