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

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        // return view('store');
        $data = $request -> all();
        $comic = Comic :: create([
            'title' => $data['title'],
            'description' => $data['description'],
            'thumb' => $data['thumb'],
            'price' => $data['price'],
            'series' => $data['series'],
            'sale_date' => $data['sale_date'],
            'type' => $data['type']
        ]);
        return redirect() -> route('show', $comic -> id);
    }

    public function edit($id){
        $comic = Comic :: findOrFail($id);
        return view('edit', compact('comic'));
    }

    public function update(Request $request, $id){
        $data = $request -> all();
        $comic = Comic :: findOrFail($id);
        $comic -> update($data);
        return redirect() -> route('show', $comic -> id);
    }

    public function destroy($id){

        $comic = Comic :: findOrFail($id);
        $comic -> delete();
        return redirect() -> route('index');
    }
}

