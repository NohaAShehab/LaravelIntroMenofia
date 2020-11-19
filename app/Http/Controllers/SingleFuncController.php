<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleFuncController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        // return "Welcome to single function controller";
        return view("itiwebsite.contactus");
    }

    public function testfunction(){
        return "welcome";
    }
}
