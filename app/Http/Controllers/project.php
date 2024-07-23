<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
    public function index($id){

        return view ('project', ['name'=>'wesam' , 'work'=>'programmer']);

    }
}
