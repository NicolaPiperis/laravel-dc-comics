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
        $data = $request -> validate(
            // $this -> getValidationRule()
            [
                'title' => 'required',
                'description' => 'required|min:10|max:1000',
                'thumb' => 'required|min:5|max:500',
                'price' => 'required|integer|numeric|min:5|max:200',
                'series' => 'required|min:3|max:255',
                'sale_date' => 'required|date',
                'type' => 'required|min:3|max:255'
            ],
            [

                "title.require" => "Un titolo è richiesto",
                "description.require" => "Una descrizione è richiesta",
                "thumb.require" => "Un percorso d'immagine è richiesto",
                "price.require" => "E' richiesto un prezzo espresso in interi",
                "series.require" => "Nome serie richiesta",
                "sale_date.require" => "Data richiesta",
                "type.require" => "Tipologia prodotto richiesta"
            ]
        );

        $comic = Comic :: create($data);

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

    public function delete($id){

        $comic = Comic :: findOrFail($id);
        $comic -> delete();
        return redirect() -> route('home');
    }

    private function getValidationRule() {

        return [
            [
            'title' => 'required',
            'description' => 'required|min:10|max:1000',
            'thumb' => 'required|min:5|max:500',
            'price' => 'required|integer|numeric|min:5|max:200',
            'series' => 'required|min:3|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:255'
            ],
            [

            "title.require" => "Un titolo è richiesto",
            "description.require" => "Una descrizione è richiesta",
            "thumb.require" => "Un percorso d'immagine è richiesto",
            "price.require" => "E' richiesto un prezzo espresso in interi",
            "series.require" => "Nome serie richiesta",
            "sale_date.require" => "Data richiesta",
            "type.require" => "Tipologia prodotto richiesta"
            ]
        ];
    }
}

