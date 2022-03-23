<div class="interact d-flex justify-content-end">
    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-sm btn-warning me-1">
        <i class="fa-solid fa-pencil"></i>
    </a>



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
        data-bs-target="#myModal-{{ $comic->id }}">
        <i class="fa-solid fa-trash"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal-{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conferma Eliminazione
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei Sicuro di Eliminare {{ $comic->title }} ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('comics.destroy', $comic) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-success">Conferma</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
