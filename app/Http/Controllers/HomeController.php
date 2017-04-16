<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'API Get Working';
    }

    public function postData(Request $request)
    {
        dd('API Post Working',$request->all());
    }
}
