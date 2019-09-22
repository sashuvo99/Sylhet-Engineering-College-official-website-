<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class index extends Controller
{
    
    public function index(){


        $events= event::all()->sortByDesc("id");
    

        return view("index" , compact("events"));
    }
}
