<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $address = "4 กรุงเทพมหานคร ประเทศไทย";
        $tel = "0928885608";
        $email = "nhcomsci61@gmail.com";
        // return view("about",["address"=>$address, 'tel'=>$tel, 'email'=>$email]);
        return view('about',compact('address','tel','email'));
    }
}   
