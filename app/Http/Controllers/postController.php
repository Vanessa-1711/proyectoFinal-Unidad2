<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        //Muestre la vista de dashboard 
        return view('dashboard');
    }
}
