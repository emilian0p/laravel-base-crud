@extends("layouts.main")

@section("title", "Homepage")

@section("main-content")
    <h2>
        Welcome to the homepage!
    </h2>
    <h4>Last Comics</h4>

    <div class="comics-container">

        @forelse ($comics as $comic)

            <div class="comic-mini-card">
                <a href="{{ route("comic.show", $comic->slug) }}">

                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h3>
                        {{ $comic->title }}
                    </h3>
                </a>
            </div>
        @empty
            <h3>Nothing found.</h3>    
        @endforelse

    </div>

@endsection 

@section("admin")
    <div class="admin-button">
        <a href="{{ route("admin.index") }}">Admin route.</a>
    </div>    
@endsection 