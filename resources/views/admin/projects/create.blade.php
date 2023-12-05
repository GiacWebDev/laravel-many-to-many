@extends('layouts.admin')

@section('content')
    <div class="d-block">
        <h1>Crea un nuovo Progetto</h1>

        <div class="row">
            <div class="col-6">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Progetto</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Stato</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>

                    @foreach ($tecnologies as $tecnology)
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="tecnology_{{ $tecnology->id }}" autocomplete="off"
                                name="tecnologies[]" value="{{ $tecnology->id }}">
                            <label class="btn btn-outline-primary"
                                for="tecnology_{{ $tecnology->id }}">{{ $tecnology->name }}</label>
                        </div>
                    @endforeach

                    <div class="my-4">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control mb-3 " placeholder="Descrizione" name="description" id="description"
                            style="height: 200px"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
