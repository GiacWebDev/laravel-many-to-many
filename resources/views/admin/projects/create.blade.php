@extends('layouts.admin')

@section('content')
    <div class="d-block">
        <h1>Crea un nuovo Progetto</h1>

        <div class="row">
            <div class="col-6">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Progetto</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Stato</label>
                        <input type="text" class="form-control" id="status" name="status">
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
