<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public $users = ['a', 'b', 'c', 'd'];
    public function index(){
        $this ->data['welcome'] = 'học lập trình với tôi và <b>cố lên</b>';
        return view('home', $this->data);
    }
    public function displayname(){
        $this ->data['name'] = '<i> <span style="color:green"> LÊ VĂN THẢO </span><i>';
         return view('home',$this ->data);
    }  
    public function forloop(){
        
        return view('loop');
    } 
}
