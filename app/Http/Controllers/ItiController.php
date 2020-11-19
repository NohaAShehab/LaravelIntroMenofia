<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItiController extends Controller
{
    // where we put our logic
    // static $var="welcome";

    # most of the logic are placed in the controller

    # All the functions inside the controller are public by default 
    # You mustnot define variable inside controller 

    function trackInfo(){

        $arr=[
            "track1"=>"PHP",
            "Track2"=>"Python",
            "Track3"=>"cloud",
            "Track4"=>"IOT"];
        $track=request("trackname");
        $key=array_key_exists($track,$arr);
        if($key){
            // return $arr[$track];  # send the value to the blade template
            # to send information to the view, use assoc array
    
            # key=> value      data=>$arr[$track]
            
    
            // return view("itiwebsite.trackinfo",["data"=>$arr]);
            $assoc_arr=["data"=>$arr];
            #task1 compact
            // $assoc_arr=compact("data",$viewData);
            // dd($assoc_arr);
            // $viewData=["data"=>$arr[$track] ];
            return view("itiwebsite.trackinfo",$assoc_arr);
    
        }else{
            // return "Not found";
    
            return abort(404);
        }
        // if()
        // return $arr[$track];
    }

    function displayStudents(){

        $students=["Mahmoud","Sayed","Fawzy","Islam","Hadary",
        "Khaled","Mohamed","Omar","Sherif","Marwa","Elene","Salah","Shalma","Reem","Hossam"];
        // return $students;

        return view("itiwebsite.students",["students"=>$students]);

    }
}
