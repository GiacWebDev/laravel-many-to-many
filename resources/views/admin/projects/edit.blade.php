@extends('layouts.admin')

@section('content')
    <div class="d-block">
        <h1>Modifica il progetto: {{ $project->name }}</h1>

        <div class="row">
            <div class="col">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                    @csrf

                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Progetto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Stato</label>
                        <input type="text" class="form-control" id="status" name="status"
                            value="{{ $project->status }}">
                    </div>
                    <div class="form-floating">
                        <label for="floatingTextarea2">Descrizione</label>
                        <textarea class="form-control mb-3 " placeholder="Descrizione" name="description" id="description" style="height: 200px"
                            value="{{ $project->description }}""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection
