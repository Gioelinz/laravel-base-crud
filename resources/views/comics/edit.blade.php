@extends('layouts.main')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @method('PUT')
            @csrf
            <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input type="text" class="form-control" placeholder="Enter Title" name="title"
                    value="{{ $comic->title }}" required>
                <span class="input-group-text" id="basic-addon1">Series</span>
                <input type="text" class="form-control" placeholder="Enter Series" name="series"
                    value="{{ $comic->series }}" required>
            </div>

            <div class="input-group mb-5">
                <input type="date" class="form-control" placeholder="Sale Date" name="sale_date"
                    value="{{ $comic->sale_date }}" required>
            </div>


            <div class="input-group mb-5">
                <span class="input-group-text">https://example.com/image/</span>
                <input type="text" id="url-prev" class="form-control" placeholder="Comic image URL" name="thumb"
                    value="{{ $comic->thumb }}" required>

                <img class="img-fluid preview" src="" alt="preview">
            </div>

            <div class="input-group mb-5">
                <span class="input-group-text">€</span>
                <input type="number" class="form-control" default="0" min="0" step="0.01" placeholder="Price" name="price"
                    value="{{ $comic->price }}" required>
                <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Type" name="type" value="{{ $comic->type }}"
                    required>
            </div>

            <div class="input-group">
                <span class="input-group-text">Decription</span>
                <textarea class="form-control" name="description" required>{{ $comic->description }}</textarea>
            </div>
            <div class="d-flex justify-content-end gap-2">
                <button class="btn btn-success mt-3" type="submit">Conferma</button>
                <a class="btn btn-warning mt-3" href="{{ route('comics.index') }}">Torna
                    indietro</a>
            </div>


        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/preview-url.js') }}"></script>
@endsection
