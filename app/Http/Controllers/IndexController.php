<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome', ["name" => "Yacoub"]);
    }

    public function bonjour($name)
    {
        return view('welcome', ["name" => $name]);
    }
}
