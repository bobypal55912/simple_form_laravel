<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class projectA extends Controller
{
    //
    public function data(Request $req)
    {
        $req->validate([
            'name'=>"required",
            'email'=>'required | email',
             'mobile'=>'required | max:10 | min:10',
             
            'date'=>'required',
            'pin'=>'min:6 | max:6'

        ]);
        $data=new project;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->mobile=$req->mobile;
        $data->date=$req->date;
        $data->pin=$req->pin;
         echo $data->save();
       
        
        
    }
}
