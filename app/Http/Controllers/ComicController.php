<?php

namespace App\Http\Controllers;

use Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

        $comics= Comic::all();
        return view ('index', compact('comics'));
    }
}
