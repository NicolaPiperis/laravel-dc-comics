@extends('layout.main-layout')

@section('content')
    <h1>{{ $comic['title'] }}</h1>

    <p>{{ $comic['description'] }}</p>

    <img src="{{ $comic['thumb'] }}" alt="">

    <a href="/">Come back</a>
@endsection
