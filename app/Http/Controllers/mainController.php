<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class mainController extends Controller
{
    public function index(){
        $comics = Comic :: all();
        return view('home', compact('comics'));
    }

    public function show($id){
        $comic = Comic :: findOrFail($id);
        return view('show', compact('comic'));
    }
}

