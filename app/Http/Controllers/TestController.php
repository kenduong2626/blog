<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getXinChao($Ten,$NamSinh){
        return 'xin chao '.$Ten.'<br>Nam sinh '.$NamSinh;
    }

    public function getWelcome($name,$age){
        return view('Welcome1', compact('name','age'));
    }

    public function getDemo($ten){
        return view('chao',['user'=>$ten]);
    }
    public function getIndex(){
        return view('index');
    }

    // tạo bảng
    public function CreatePersons(){
        Schema::create('persons',function($table){
        $table->increments('id');
        $table->string('name',50);
        $table->timestamps();
    });
    }

    

}
