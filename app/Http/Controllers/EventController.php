<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
            $name = "Enrico";
            $arr = [1, 2, 3, 4, 5];
        
            return view('welcome', ['name' => $name, 'arr' => $arr]);
    }

    public function create(){
        return view('events.create');
    }
}
