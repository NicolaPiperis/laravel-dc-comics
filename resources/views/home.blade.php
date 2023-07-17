@extends('layout.main-layout')

@section('content')
    <main>
        Hello, World!
        @foreach ($comics as $comic)
            <ul>
                <li class="list-unstyled">
                    <a href="{{ route('show', $comic->id) }}">
                        {{ $comic['title'] }}
                    </a>
                </li>
            </ul>
        @endforeach
    </main>
@endsection
