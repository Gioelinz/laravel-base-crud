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

        <form action="{{ route('comics.store') }}" method="post" novalidate>
            @csrf
            <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input id="title" type="text" class="form-control me-3 @error('title') is-invalid @enderror"
                    placeholder="Enter Title" value="{{ old('title') }}" name="title" required>
                {{-- @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror --}}
                <span class="input-group-text" id="basic-addon1">Series</span>
                <input type="text" class="form-control @error('series') is-invalid @enderror" placeholder="Enter Series"
                    name="series" value="{{ old('series') }}" required>
            </div>

            <div class="input-group mb-5">
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Sale Date"
                    name="sale_date" value="{{ old('sale_date') }}" required>
            </div>


            <div class="input-group mb-5">

                <span class="input-group-text">https://example.com/image/</span>
                <input type="text" id="url-prev" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="Comic image URL" name="thumb" value="{{ old('thumb') }}" required>

                <img class="img-fluid preview" src="" alt="preview">
            </div>

            <div class="input-group mb-5">
                <span class="input-group-text">€</span>
                <input type="number" class="form-control @error('price') is-invalid @enderror" default="0" min="0"
                    step="0.01" placeholder="Price" name="price" value="{{ old('price') }}" required>
                <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-5">
                <input type="text" class="form-control @error('type') is-invalid @enderror" placeholder="Type" name="type"
                    value="{{ old('type') }}" required>
            </div>

            <div class="input-group">
                <span class="input-group-text">Decription</span>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    required>{{ old('description') }}</textarea>
            </div>
            <div class="d-flex justify-content-end gap-2">
                <button class="btn btn-danger mt-3" type="reset">Reset</button>
                <button class="btn btn-success mt-3" type="submit">Aggiungi</button>
                <a class="btn btn-warning mt-3" href="{{ route('comics.index') }}">Torna
                    indietro</a>
            </div>


        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/preview-url.js') }}"></script>
    <script>
        const title = document.getElementById('title');

        title.onkeyup = function() {
            const value = title.value;

            console.log(value);
            if (value.length >= 5) {
                title.classList.add('is-valid')
                title.classList.remove('is-invalid')
            } else {
                title.classList.add('is-invalid')
                title.classList.remove('is-valid')
            }
        };
    </script>
@endsection
