<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\notice;

class index extends Controller
{
    
    public function index(){


        $events= event::all()->sortByDesc("id");
        $notices= notice::all()->sortByDesc("id");
        return view("index" , compact("events","notices"));
    }
}
