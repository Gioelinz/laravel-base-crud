@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-lg btn-success" href="{{ route('comics.create') }}">Aggiungi Comic</a>
    </div>
    <div class="row">
        @forelse ($comics as $comic)
            <div class="col-3">
                <div class="card mb-3 overflow-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="{{ route('comics.show', $comic) }}">
                                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start"
                                    alt="{{ $comic->series }}">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body pt-1">
                                <div class="interact d-flex justify-content-end">
                                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">Series: <strong>{{ $comic->series }}</strong></p>
                                <p class="card-text text-muted">€{{ $comic->price }}</p>
                            </div>
                            <div class="card-footer bg-white">
                                <p class="card-text">{{ date('F j, Y', strtotime($comic->sale_date)) }}</p>
                                <a href="{{ route('comics.show', $comic) }}">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h1 class="text-center mt-5">Non ci sono Comics da mostrare</h1>
        @endforelse
    </div>
@endsection
