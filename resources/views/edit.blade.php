@extends('layout.main-layout')

@section('content')
    <div class="text-center">

        <h1>Aggiungi un nuovo fumetto</h1>

        <form class="py-3" method="POST" action="{{ route('update', $comic->id) }}">

            @csrf
            @method('PUT')

            <div>
                <label for="title">Title</label>
                <br>
                <input type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div>
                <label for="description">Description</label>
                <br>
                <input type="text" name="description" id="description" value="{{ $comic->description }}">
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <br>
                <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>

            <div>
                <label for="price">Price</label>
                <br>
                <input type="text" name="price" id="price" value="{{ $comic->price }}">
            </div>

            <div>
                <label for="series">Series</label>
                <br>
                <input type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div>
                <label for="sale_date">Sale Date</label>
                <br>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div>
                <label for="type">Type</label>
                <br>
                <input type="text" name="type" id="type" value="{{ $comic->type }}">
            </div>

            <input class="rounded mt-3 px-3" type="submit" value="Edit">

        </form>

    </div>
@endsection
