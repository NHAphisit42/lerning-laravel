<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $address = "4 กรุงเทพมหานคร ประเทศไทย";
        $tel = "0928885608";
        $email = "nhcomsci61@gmail.com";
        // return view("about",["address"=>$address, 'tel'=>$tel, 'email'=>$email]); //ส่งค่าจาก Controller ไป View
        // return view('about',compact('address','tel','email')); //ส่งค่าด้วยฟังก์ชัน Compact
        return view("about") //ส่งค่าฟังก์ชัน With
        ->with("address",$address)
        ->with("tel",$tel)
        ->with("email",$email)
        ->with('error', '404 not Found'); //with เอาไว้ส่งค่า 1 ถึง 2 ตัวแปร
    }
}   
