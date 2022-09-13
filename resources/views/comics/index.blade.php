@extends('layouts.app')

@section('main_content')
    <h1>I nostri fumetti</h1>
    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', [$comic->id]) }}">
                <div>
                    <div>Titolo: {{ $comic->title }}</div>
                    <div>Serie: {{ $comic->series }}</div>
                    <div>Tipologia: {{ $comic->type }}</div>
                    <div>Prezzo: {{ $comic->price }}</div>
                </div>
            </a>
        </div>
        <br>
    @endforeach
@endsection