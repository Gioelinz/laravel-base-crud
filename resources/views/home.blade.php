@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="list-group text-center w-50">
                <h1>All Comics by title</h1>
                @forelse ($comics as $comic)
                    <a href="{{ route('comics.show', $comic) }}"
                        class="list-group-item list-group-item-secondary list-group-item-action">{{ $comic->title }}</a>
                @empty
                    <p>Nothing to see here.</p>
                @endforelse
                <a class="btn btn-primary mt-1" href="{{ route('comics.index') }}">Go to Comics</a>
            </div>
        </div>
    </div>
@endsection
