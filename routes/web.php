<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/iti',function () {
    return view('iti');
});

#studentslist

Route::get('/studentslist',function(){

    // return view("iti");
    // return "Welcome to laravel";

    // $hello="<h2> Welcome to students list </h2>";
    // return $hello;
    $students=["Mahmoud","Sayed","Fawzy","Islam","Hadary",
    "Khaled","Mohamed","Omar","Sherif","Marwa","Elene","Salah","Shalma","Reem","Hossam"];
    // return $students;

    $arr=["org"=>"ITI","track"=>"PHP","course"=>"laravel", "StdNum"=>15,"names"=>$students];
    return $arr;

    // return 9+9;
});

Route::get("/islam",function($name=20){
    
    return "Welcome ".$name;
});
# get information from the url
// Route::get("/iti/{name}/test",function($name){
    
//     return "Welcome ".$name;
// });

// Route::get("/iti/{name}/{age}",function($name,$age){
    
//     return "Welcome ".$name. " ". $age;
// });

// Route::get("/iti/{test}",function($test){
    
//     return "Welcome jkhkh ".$test;
// });

# request parameter

Route::get('/info',function(){

    # function request --> returns with request parameters sent in the url
    $info = request();

    # convert to array
    // if(is_array((array)$info)){
    //     return true;
    // }

    dd((array)$info);
    // var_dump((array)$info);

    // var_dump($_REQUEST);

    //    if(in_array("iti",(array)$info)){
    //     $disInfo= "My name is ".$info["name"]." Year = ".$info['year'];

    //    }else{
    //        $disInfo="welcome";
    //    }

    $nn="test";
# display info about the variables
    dd($nn);
    // return "These are my info";
   
    // return $_REQUEST;
    return $disInfo;
});

Route::get("/varinfo",function(){

        $reqData= request();  # request// request parameters
        // dd($reqData); # will ouput the info about the variable and stop exe.
        dump($reqData);

        return "Welcome to php";
});

    # our first website  (route, view)

    #home page

    Route::get("/iti/home",function(){
        return view("itiwebsite.home");
    });

    #tracks page 
    Route::get("/iti/tracks",function(){
        return view("itiwebsite.tracks");
    });

    #contact us page
    Route::get("/iti/contact",function(){
        return view("itiwebsite.contactus");
    });

    #about us page

    Route::get("/iti/about",function(){
        return view("itiwebsite/aboutus");
    });


    // Route::get("/iti/trackinfo",function(){
    //     $tracks=["python"=>"Django","PHP"=>"Laravel"];
    //     if(in_array(request("track"),array_keys($tracks))){
    //         return $tracks[request("track")];
    //     }else{
    //         return abort(404);
    //     }
    // });

 
    #before laravel 8
                #add
    Route::get('iti/trackinfo','App\Http\Controllers\ItiController@trackInfo');

    use App\Http\Controllers\iti\AbcController;
    Route::get('omar',[AbcController::class, "hello"]);


  

    use App\Http\Controllers\ItiController as ABC;
    Route::get("iti/students",[ABC::class,'displayStudents']);
    
    // Route::get("iti/students",ABC::class); #invokable controller



    use App\Http\Controllers\SingleFuncController;
    Route::get("single",SingleFuncController::class);
    Route::get("single2",[SingleFuncController::class,"testfunction"]);

    Route::get("single3",[SingleFuncController::class,"testfunction"]);






    #make controller do single function 
    # php artisan make:controller SingleFunController --invokable

    # writing controller 


    #dealing with controllers 
    # use App\Http\Controllers\UserController;
    # Route::get('hh', [NewController::class, 'test']);
    # 


    #If you would like to define a controller that
    # only handles a single action, 
    #you may place a single __invoke method on the controller:
    // Route::get('', ControllerName::class);
    #php artisan make:controller ShowProfile --invokable





