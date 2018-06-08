<?php

namespace App\Http\Controllers;

use App\CharacterGenerator;

class HomeController extends Controller
{
    public function index(){

        $characterGenerator = new CharacterGenerator();
        $character = $characterGenerator->generate();

        return view('index', ['character' => $character]);
    }
}
