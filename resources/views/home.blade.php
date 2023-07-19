@extends('layout.main-layout')

@section('content')
    <main>
        <h1 class="text-center py-3">
            Fumetti disponibili
            <a class="text-decoration-none text-info" href="{{ route('create') }}">+</a>
        </h1>
        @foreach ($comics as $comic)
            <ul class="py-3 text-center fs-5">
                <li class="list-unstyled">
                    <a class="text-decoration-none text-info" href="{{ route('show', $comic->id) }}">
                        {{ $comic['title'] }}
                    </a>
                    <a class="text-decoration-none text-info" href="{{ route('edit', $comic->id) }}">
                        EDIT
                    </a>
                    {{-- <form action="{{ route('delete', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="text-decoration-none text-info">
                    </form> --}}
                    <form method="POST" action="{{ route('delete', $comic->id) }}">

                        @csrf
                        @method('DELETE')

                        <input type="submit" value="DELETE">
                    </form>

                    {{-- <a class="text-decoration-none text-info" href="{{ route('destroy', $comic->id) }}">
                        DELETE
                    </a> --}}

                </li>
            </ul>
        @endforeach
    </main>
@endsection
