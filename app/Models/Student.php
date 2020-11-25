<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model  #students
{
    use HasFactory;
    //    protected $table=""
//        protected $fillable=["name","email","track","level"];
     protected $guarded;

     # display the object details
     function path(){
         return route("student.show",$this);
     }


}
