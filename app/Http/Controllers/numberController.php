<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numberController extends Controller
{
    public function show(Request $request){
      return view('numberView',['number3'=>$request->input('textNumber3'),'number5'=>$request->input('textNumber5'),'multiples'=>$request->input('Multiples')]);
    }
}
